<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PortfolioController extends Controller
{
    public function __construct()
    {
        // Require login + admin for every action in this controller
        $this->middleware(function ($request, $next) {
            if (!Auth::check() || !Auth::user()->is_admin) {
                abort(403, 'Unauthorized');
            }

            return $next($request);
        });
    }

    /**
     * List all projects (Manage Portfolio)
     */
    public function index()
    {
        // use $projects to match your Blade
        $projects = Portfolio::orderBy('sort_order')->get();

        // view: resources/views/admin/portfolio/index.blade.php
        return view('admin.manage', compact('projects'));
    }

    /**
     * Show create form
     */
    public function create()
    {
        // view: resources/views/admin/portfolio/create.blade.php
        return view('admin.create');
    }

    /**
     * Store new project
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title'       => 'required|string|max:255',
            'subtitle'    => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image_url'   => 'nullable|string|max:255',
            'github_url'  => 'nullable|string|max:255',
            'live_url'    => 'nullable|string|max:255',
            'sort_order'  => 'nullable|integer',
        ]);

        Portfolio::create($data);

        return redirect()
            ->route('admin.dashboard')
            ->with('success', 'Portfolio item created.');
    }

    /**
     * Show edit form
     */
    public function edit(Portfolio $portfolio)
    {
        $project = $portfolio; // rename for clarity in the view

        // view: resources/views/admin/portfolio/edit.blade.php
        return view('admin.portfolio.edit', compact('project'));
    }

    /**
     * Update existing project
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        $data = $request->validate([
            'title'       => 'required|string|max:255',
            'subtitle'    => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image_url'   => 'nullable|string|max:255',
            'github_url'  => 'nullable|string|max:255',
            'live_url'    => 'nullable|string|max:255',
            'sort_order'  => 'nullable|integer',
        ]);

        $portfolio->update($data);

        return redirect()
            ->route('admin.portfolio.index')
            ->with('success', 'Portfolio item updated.');
    }

    /**
     * Delete project
     */
    public function destroy(Portfolio $portfolio)
    {
        $portfolio->delete();

        return redirect()
            ->route('admin.portfolio.index')
            ->with('success', 'Portfolio item deleted.');
    }
}
