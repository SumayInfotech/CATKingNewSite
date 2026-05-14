<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class LeadershipController extends Controller
{
    private function getLeadershipData()
    {
        $path = base_path('leadership_programs_2.json');
        if (!File::exists($path)) {
            return [];
        }
        $json = File::get($path);
        $data = json_decode($json, true);
        
        foreach ($data as $item) {
            if (isset($item['type']) && $item['type'] === 'table' && isset($item['data'])) {
                // Decode file field if it exists
                return array_map(function($row) {
                    if (isset($row['file']) && !empty($row['file'])) {
                        $row['file'] = json_decode($row['file'], true);
                    }
                    return $row;
                }, $item['data']);
            }
        }
        return [];
    }

    public function flp(Request $request, $year = null)
    {
        $allData = $this->getLeadershipData();
        
        // Get unique years for FLP
        $years = array_unique(array_filter(array_map(function($item) {
            return $item['is_flp'] == 1 ? $item['year'] : null;
        }, $allData)));
        rsort($years);

        $year = $year ?? ($years[0] ?? date('Y'));
        
        $leaderShipPrograms = array_filter($allData, function($item) use ($year) {
            return ($item['is_flp'] == 1) && ($item['year'] == $year);
        });

        usort($leaderShipPrograms, function($a, $b) {
            return (int)$a['sort_order'] <=> (int)$b['sort_order'];
        });

        if ($request->ajax()) {
            $type = 'flp';
            return response()->json(['html' => view('leadership.ajax-index', compact('leaderShipPrograms', 'type'))->render()]);
        }

        return view('leadership.flp', compact('leaderShipPrograms', 'year', 'years'));
    }

    public function mlp(Request $request, $year = null)
    {
        $allData = $this->getLeadershipData();
        
        // Get unique years for MLP
        $years = array_unique(array_filter(array_map(function($item) {
            return $item['is_mlp'] == 1 ? $item['year'] : null;
        }, $allData)));
        rsort($years);

        $year = $year ?? ($years[0] ?? date('Y'));

        $leaderShipPrograms = array_filter($allData, function($item) use ($year) {
            return ($item['is_mlp'] == 1) && ($item['year'] == $year);
        });

        // Trainers: trainer="yes"
        $trainers = array_filter($allData, function($item) {
            return (isset($item['trainer']) && $item['trainer'] === 'yes');
        });

        // Testimonials: has description and is_mlp=1
        $testimonials = array_filter($allData, function($item) {
            return ($item['is_mlp'] == 1) && !empty($item['description']);
        });

        usort($leaderShipPrograms, function($a, $b) {
            return (int)$a['sort_order'] <=> (int)$b['sort_order'];
        });

        if ($request->ajax()) {
            $type = 'mlp';
            return response()->json(['html' => view('leadership.ajax-index', compact('leaderShipPrograms', 'type'))->render()]);
        }

        return view('leadership.mlp', compact('leaderShipPrograms', 'year', 'years', 'trainers', 'testimonials'));
    }

    public function elp()
    {
        return view('leadership.elp');
    }
}
