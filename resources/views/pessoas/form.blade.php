<p>
    Nome: <input type="text" name="nome" value="{{ old('nome', $pessoa->nome ?? '') }}">
</p>
<p>
    Email: <input type="email" name="email" value="{{ old('email', $pessoa->email ?? '') }}">
</p>
<p>
    Telefone: <input type="text" name="telefone" value="{{ old('telefone', $pessoa->telefone ?? '') }}">
</p>
