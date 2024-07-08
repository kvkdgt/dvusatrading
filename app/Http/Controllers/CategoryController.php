<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category; // Assuming your model is named Category

class CategoryController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'categoryName' => 'required|string|max:255',
            'categoryDescription' => 'required|string',
        ]);

        // Create new category instance
        $category = new Category();
        $category->name = $validatedData['categoryName'];
        $category->description = $validatedData['categoryDescription'];
        $category->status = 'active'; // Set status to active by default

        // Save the category
        $category->save();

        // Redirect back or wherever you want after successful save
        return redirect()->back()->with('success', 'Category added successfully.');
    }

    public function update(Request $request, $id)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'categoryName' => 'required|string|max:255',
            'categoryDescription' => 'required|string',
        ]);

        // Find the category by ID and update it
        $category = Category::findOrFail($id);
        $category->name = $validatedData['categoryName'];
        $category->description = $validatedData['categoryDescription'];

        // Save the updated category
        $category->save();

        // Redirect back or wherever you want after successful update
        return redirect()->back()->with('success', 'Category updated successfully.');
    }

    public function destroy($id)
    {
        // Find the category by ID and delete it
        $category = Category::findOrFail($id);
        $category->delete();

        // Redirect back or wherever you want after successful deletion
        return redirect()->back()->with('success', 'Category deleted successfully.');
    }
}
