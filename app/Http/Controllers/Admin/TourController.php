<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tour;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TourController extends Controller
{
    public function index()
    {
        $tours = Tour::with('category')->latest()->paginate(10);
        return view('admin.tours.index', compact('tours'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.tours.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'price' => 'required|numeric',
            'image' => 'image'
        ]);

        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = $request->image->store('tours', 'public');
        }

        Tour::create([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'price' => $request->price,
            'duration' => $request->duration,
            'description' => $request->description,
            'image' => $imageName,
            'status' => $request->status ?? 1
        ]);

        return redirect()->route('tours.index')->with('success', 'Thêm tour thành công');
    }

    public function edit(Tour $tour)
    {
        $categories = Category::all();
        return view('admin.tours.edit', compact('tour', 'categories'));
    }

    public function update(Request $request, Tour $tour)
    {
        $request->validate([
            'title' => 'required',
            'price' => 'required|numeric'
        ]);

        $imageName = $tour->image;
        if ($request->hasFile('image')) {
            $imageName = $request->image->store('tours', 'public');
        }

        $tour->update([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'price' => $request->price,
            'duration' => $request->duration,
            'description' => $request->description,
            'image' => $imageName,
            'status' => $request->status
        ]);

        return redirect()->route('tours.index')->with('success', 'Cập nhật thành công');
    }

    public function destroy(Tour $tour)
    {
        $tour->delete();
        return back()->with('success', 'Đã xóa');
    }
}
