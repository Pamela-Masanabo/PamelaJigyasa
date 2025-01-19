<?php

namespace App\Http\Controllers;

use App\Models\Catalog;

class CatalogController extends Controller
{
    // Display the catalog of services offered by freelancers
    public function index()
    {
        $catalogs = Catalog::with('freelancer')->get();  // Eager load freelancer data

        return view('catalog.index', compact('catalogs'));
    }

    // Show a specific catalog item
    public function show(Catalog $catalog)
    {
        return view('catalog.show', compact('catalog'));
    }
}
