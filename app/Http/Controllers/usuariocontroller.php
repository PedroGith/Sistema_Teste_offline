public function edit($id)
{
    $usuario = Usuario::findOrFail($id);
    return view('usuarios.edit', compact('usuario'));
}

public function update(Request $request, $id)
{
    $usuario = Usuario::findOrFail($id);

    $usuario->update([
        'nome' => $request->nome,
        'email' => $request->email,
    ]);

    return redirect('/usuarios');
}

public function destroy($id)
{
    $usuario = Usuario::findOrFail($id);
    $usuario->delete();

    return redirect('/usuarios');
}
🌐 Atualizar rotas