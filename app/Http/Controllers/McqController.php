<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class McqController extends Controller
{
    private function getData()
    {
        $path = base_path('u210537475_latest_catking.json');
        if (!File::exists($path)) {
            return ['categories' => [], 'tests' => [], 'questions' => []];
        }

        $json = json_decode(File::get($path), true);
        $data = [
            'categories' => [],
            'tests' => [],
            'questions' => []
        ];

        foreach ($json as $item) {
            if (isset($item['type']) && $item['type'] === 'table') {
                if ($item['name'] === 'mcq_categories') {
                    $data['categories'] = $item['data'] ?? [];
                } elseif ($item['name'] === 'mcqs') {
                    $data['tests'] = $item['data'] ?? [];
                } elseif ($item['name'] === 'mcq_questions') {
                    $data['questions'] = $item['data'] ?? [];
                }
            }
        }

        // Sort categories by sort_order
        usort($data['categories'], function($a, $b) {
            return (int)($a['sort_order'] ?? 0) <=> (int)($b['sort_order'] ?? 0);
        });

        // Sort tests by sort_order
        usort($data['tests'], function($a, $b) {
            return (int)($a['sort_order'] ?? 0) <=> (int)($b['sort_order'] ?? 0);
        });

        return $data;
    }

    public function index()
    {
        $allData = $this->getData();
        $categories = $allData['categories'];
        return view('mcq.index', compact('categories'));
    }

    public function category($slug)
    {
        $allData = $this->getData();
        $category = null;
        foreach ($allData['categories'] as $cat) {
            if ($cat['slug'] === $slug) {
                $category = $cat;
                break;
            }
        }

        if (!$category) {
            abort(404);
        }

        $tests = [];
        foreach ($allData['tests'] as $t) {
            if ($t['mcq_category_id'] == $category['id']) {
                $tests[] = $t;
            }
        }

        // If it's scholarship test (id 6), we might want to go straight to test detail
        if ($category['id'] == 6 && count($tests) > 0) {
            return redirect()->route('mcq.test', $tests[0]['slug']);
        }

        return view('mcq.category', compact('category', 'tests'));
    }

    public function test($slug)
    {
        $allData = $this->getData();
        $test = null;
        foreach ($allData['tests'] as $t) {
            if ($t['slug'] === $slug) {
                $test = $t;
                break;
            }
        }

        if (!$test) {
            abort(404);
        }

        $category = null;
        foreach ($allData['categories'] as $cat) {
            if ($cat['id'] == $test['mcq_category_id']) {
                $category = $cat;
                break;
            }
        }

        return view('mcq.test', compact('test', 'category'));
    }

    public function questions($slug)
    {
        $allData = $this->getData();
        $test = null;
        foreach ($allData['tests'] as $t) {
            if ($t['slug'] === $slug) {
                $test = $t;
                break;
            }
        }

        if (!$test) {
            abort(404);
        }

        $questions = [];
        foreach ($allData['questions'] as $q) {
            if ($q['mcq_id'] == $test['id']) {
                if (isset($q['question_file'])) {
                    $q['question_file_data'] = json_decode($q['question_file'], true);
                }
                if (isset($q['option_file1'])) {
                    $q['option_file1_data'] = json_decode($q['option_file1'], true);
                }
                if (isset($q['option_file2'])) {
                    $q['option_file2_data'] = json_decode($q['option_file2'], true);
                }
                if (isset($q['option_file3'])) {
                    $q['option_file3_data'] = json_decode($q['option_file3'], true);
                }
                if (isset($q['option_file4'])) {
                    $q['option_file4_data'] = json_decode($q['option_file4'], true);
                }
                $questions[] = $q;
            }
        }

        return view('mcq.questions', compact('test', 'questions'));
    }
}
