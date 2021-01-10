    @include('candidatos.includes.alerts')

    @csrf

    <div class="form-group">
        <label for="formGroupExampleInput">Nome Candidato</label>
        <input type="text" class="form-control" name="nome" id="nome" value="{{ old('nome') }}" placeholder="Nome Candidato">
    </div>

    <div class="form-group">
        <label for="formGroupExampleInput">Email</label>
        <input type="text" class="form-control" name="email" id="email" value="{{ old('email') }}" placeholder="Email">
    </div>

    <div class="form-group">
        <label for="formGroupExampleInput">Idade</label>
        <input type="number" class="form-control" name="idade" id="idade" value="{{ old('idade') }}" placeholder="Idade">
    </div>

    <div class="form-group">
        <label for="formGroupExampleInput">URL Linkedin</label>
        <input type="text" class="form-control" name="linkedin" id="linkedin" value="{{ old('linkedin') }}" placeholder="Url Linkedin">
    </div>

    <p>Adicione suas competências</p>
   

    <div class="form-check form-check-inline">
        <input type="checkbox" class="form-check-input" id="inlineCheckbox1" name="competencias[]" value="C#">
        <label class="form-check-label" for="inlineCheckbox1">C#</label>
    </div>
    <div class="form-check form-check-inline">
        <input type="checkbox" class="form-check-input" id="inlineCheckbox2" name="competencias[]" value="JavaScript">
        <label class="form-check-label" for="inlineCheckbox2">JavaScript</label>
    </div>
    <div class="form-check form-check-inline">
        <input type="checkbox" class="form-check-input" id="inlineCheckbox3" name="competencias[]" value="Nodejs">
        <label class="form-check-label" for="inlineCheckbox1">Nodejs</label>
    </div>
    <div class="form-check form-check-inline">
        <input type="checkbox" class="form-check-input" id="inlineCheckbox4" name="competencias[]" value="Angular">
        <label class="form-check-label" for="inlineCheckbox2">Angular</label>
    </div>
    <div class="form-check form-check-inline">
        <input type="checkbox" class="form-check-input" id="inlineCheckbox5" name="competencias[]" value="React">
        <label class="form-check-label" for="inlineCheckbox1">React</label>
    </div>
    <div class="form-check form-check-inline">
        <input type="checkbox" class="form-check-input" id="inlineCheckbox6" name="competencias[]" value="Ionic">
        <label class="form-check-label" for="inlineCheckbox2">Ionic</label>
    </div>
    <div class="form-check form-check-inline">
        <input type="checkbox" class="form-check-input" id="inlineCheckbox7" name="competencias[]" value="Mensageria">
        <label class="form-check-label" for="inlineCheckbox1">Mensageria</label>
    </div>
    <div class="form-check form-check-inline">
        <input type="checkbox" class="form-check-input" id="inlineCheckbox8" name="competencias[]" value="PHP">
        <label class="form-check-label" for="inlineCheckbox2">PHP</label>
    </div>
    <div class="form-check form-check-inline">
        <input type="checkbox" class="form-check-input" id="inlineCheckbox9" name="competencias[]" value="Laravel">
        <label class="form-check-label" for="inlineCheckbox1">Laravel</label>
    </div>
    <br>
    
    <input type="submit" class="btn btn-primary mt-3" value="Cadastrar candidato">
    