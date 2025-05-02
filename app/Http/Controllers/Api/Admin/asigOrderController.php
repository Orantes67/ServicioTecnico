<?php


namespace App\Http\Controllers;

use App\Models\AssignedOrder;
use Illuminate\Http\Request;

class AssignedOrderController extends Controller
{
    public function index()
    {
        return response()->json(AssignedOrder::with(['client', 'component', 'service', 'user'])->get(), 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'idclient' => 'required|exists:client,id',
            'idcomponent' => 'required|exists:component,id',
            'idservice' => 'required|exists:service,id',
            'iduser' => 'required|exists:users,id',
        ]);

        $order = AssignedOrder::create($request->all());
        return response()->json($order, 201);
    }

    public function show($id)
    {
        $order = AssignedOrder::with(['client', 'component', 'service', 'user'])->find($id);
        if (!$order) return response()->json(['message' => 'Order not found'], 404);
        return response()->json($order, 200);
    }

    public function update(Request $request, $id)
    {
        $order = AssignedOrder::find($id);
        if (!$order) return response()->json(['message' => 'Order not found'], 404);

        $order->update($request->all());
        return response()->json($order, 200);
    }

    public function destroy($id)
    {
        $order = AssignedOrder::find($id);
        if (!$order) return response()->json(['message' => 'Order not found'], 404);

        $order->delete();
        return response()->json(['message' => 'Order deleted'], 204);
    }
}
