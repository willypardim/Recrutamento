    @include('candidatos.includes.alerts')

    @csrf
    <input type="text" name="nome" id="nome" value="{{ old('nome') }}">
    <input type="text" name="email" id="email" value="{{ old('email') }}">
    <input type="number" name="idade" id="idade" value="{{ old('idade') }}">
    <input type="text" name="linkedin" id="linkedin" value="{{ old('linkedin') }}">

    <label for="title">Adicione suas competências</label>
    <input type="checkbox" name="competencias[]" value="C#">C#
    <input type="checkbox" name="competencias[]" value="JavaScript">JavaScript
    <input type="checkbox" name="competencias[]" value="Nodejs">Nodejs
    <input type="checkbox" name="competencias[]" value="Angular">Angular
    <input type="checkbox" name="competencias[]" value="React">React
    <input type="checkbox" name="competencias[]" value="Ionic">Ionic
    <input type="checkbox" name="competencias[]" value="Mensageria">Mensageria
    <input type="checkbox" name="competencias[]" value="PHP">PHP
    <input type="checkbox" name="competencias[]" value="Laravel">Laravel
    
    <input type="submit" value="Cadastrar candidato">