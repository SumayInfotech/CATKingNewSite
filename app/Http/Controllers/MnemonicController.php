<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class MnemonicController extends Controller
{
    private function getMnemonics()
    {
        $path = base_path('mnemonics.json');
        if (!File::exists($path)) {
            return [];
        }

        $json = json_decode(File::get($path), true);
        
        // Find the table data for mnemonics
        foreach ($json as $item) {
            if (isset($item['type']) && $item['type'] === 'table' && $item['name'] === 'mnemonics') {
                $data = $item['data'] ?? [];
                foreach ($data as &$m) {
                    if (isset($m['file'])) {
                        $m['file_data'] = json_decode($m['file'], true);
                    }
                }
                
                // Sort data by chapter number
                usort($data, function($a, $b) {
                    return (int)($a['chapter'] ?? 0) <=> (int)($b['chapter'] ?? 0);
                });

                return $data;
            }
        }

        return [];
    }

    public function index()
    {
        $mnemonics = $this->getMnemonics();
        return view('mnemonics.index', compact('mnemonics'));
    }

    public function show($slug)
    {
        $mnemonics = $this->getMnemonics();
        $mnemonic = null;
        $prev = null;
        $next = null;

        foreach ($mnemonics as $key => $m) {
            if ($m['slug'] === $slug) {
                $mnemonic = $m;
                $prev = $mnemonics[$key - 1] ?? null;
                $next = $mnemonics[$key + 1] ?? null;
                break;
            }
        }

        if (!$mnemonic) {
            abort(404);
        }

        return view('mnemonics.show', compact('mnemonic', 'mnemonics', 'prev', 'next'));
    }
}
