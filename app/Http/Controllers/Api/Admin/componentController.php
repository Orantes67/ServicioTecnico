<?php


namespace App\Http\Controllers;

use App\Models\Component;
use Illuminate\Http\Request;

class ComponentController extends Controller
{
    public function index()
    {
        return response()->json(Component::with(['service', 'client'])->get(), 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'mark' => 'required|string',
            'numSerie' => 'required|string',
            'fault' => 'required|string',
            'conditions' => 'required|string',
            'idservice' => 'required|exists:service,id',
            'idclient' => 'required|exists:client,id',
            'pay' => 'required|integer',
            'missing' => 'required|integer',
        ]);

        $component = Component::create($request->all());
        return response()->json($component, 201);
    }

    public function show($id)
    {
        $component = Component::with(['service', 'client'])->find($id);
        if (!$component) {
            return response()->json(['message' => 'Component not found'], 404);
        }
        return response()->json($component, 200);
    }

    public function update(Request $request, $id)
    {
        $component = Component::find($id);
        if (!$component) {
            return response()->json(['message' => 'Component not found'], 404);
        }

        $component->update($request->all());
        return response()->json($component, 200);
    }

    public function destroy($id)
    {
        $component = Component::find($id);
        if (!$component) {
            return response()->json(['message' => 'Component not found'], 404);
        }

        $component->delete();
        return response()->json(['message' => 'Component deleted'], 204);
    }
}
