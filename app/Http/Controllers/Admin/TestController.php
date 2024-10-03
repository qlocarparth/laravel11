<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Test;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $tests = Test::all();
        return view('admin.tests.index', compact('tests'));
    }

    public function create()
    {
        return view('admin.tests.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Test::create($request->only('name', 'description', 'status'));

        return redirect()->route('tests.index')->with('success', 'Test created successfully.');
    }

    public function edit(Test $test)
    {
        return view('admin.tests.edit', compact('test'));
    }

    public function update(Request $request, Test $test)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $test->update($request->only('name', 'description', 'status'));

        return redirect()->route('tests.index')->with('success', 'Test updated successfully.');
    }

    public function destroy(Test $test)
    {
        $test->delete();
        return redirect()->route('tests.index')->with('success', 'Test deleted successfully.');
    }
    public function runTest(Test $test)
    {
        // Path to your PHPUnit executable
        $phpunitPath = base_path('vendor/bin/phpunit');

        // Path to your test file, adjust as necessary
        $testFilePath = base_path('tests/Feature/' . $test->name . '.php'); // Change this as per your directory structure

        // Use exec to run the test and capture the output
        $command = escapeshellarg($phpunitPath) . ' ' . escapeshellarg($testFilePath);
        $output = [];
        $returnVar = 0;

        exec($command, $output, $returnVar);

        // Format output as a string
        $output = implode("\n", $output);

        // // Handle cases where tests may not have run
        // if ($returnVar !== 0) {
        //     $output = "Error running test: " . $test->name;
        // }

        return redirect()->route('tests.index')->with('output', nl2br(e($output)));
    }


}
