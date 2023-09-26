<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Cadastrar um evento</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="{{ url('/admin/eventos/cadastrar') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="modal-body">

                    <div class="d-flex">
                        <select class="form-control" name="cbxPalestrante" required style="width: fit-content;">
                            <option>--Selecione um proponente--</option>
                            @foreach ($palestrantes as $palestrante)
                                <option>{{$palestrante->nome}}</option>
                            @endforeach
                        </select>
                        <span class="ms-2 mt-2">
                            ou
                            <a href="{{url('/admin/proponente')}}" class="border-bottom">Cadastre um proponente</a>
                        </span>
                    </div>

                    <div class="form-floating mb-3">
                        <p><label for="titulo">Informe o titulo do evento</label></p>
                        <p><input class="form-control " type="text" name="txtTitulo" required /></p>
                        <p><label for="titulo">Informe a descrição do evento</label></p>
                        <p><input class="form-control" type="text" name="txtDescricao" required /></p>
                        <p><label>Informe a data do evento</label></p>
                        <p><input class="form-control" type="date" name="diaEvento" required /></p>
                        <p><label>Informe o horário de início</label></p>
                        <p><input class="form-control" type="time" name="hrInicio" required /></p>
                        <p><label>Informe o horário de fim</label></p>
                        <p><input class="form-control" type="time" name="hrFim" required /></p>
                        <p><label>Informe o número de vagas</label></p>
                        <p><input class="form-control" type="number" name="numVagas" required /></p>
                        <p><label>Informe a quantidade de horas</label></p>
                        <p><input class="form-control" type="number" name="numHoras" required /></p>
                        <p><label for="local">Informe o local do evento</label></p>
                        <p><input class="form-control " type="text" name="txtLocal" required /></p>
                        <div class="mb-2">
                            <label for="basic-url" class="form-label">Escolha a foto que representa o Evento</label>
                            <div class="input-group">
                                <input class="form-control" type="file" name="arquivo" id="formFile" accept=".png, .jpg, .jpeg, .webp, .avif, .jfif">
                            </div>
                            <div class="form-text" id="basic-addon4">.png, .jpg, .jpeg, .webp, .avif, .jfif</div>
                        </div>
                        <p>
                            <label for="tipoEvento">Tipo de Evento</label>
                        </p>
                        <p>
                            <select class="form-control" name="cbxTipoEvento" id="tipoEvento" required>
                                <option>--Selecionar tipo do evento--</option>
                                @foreach ($tipoEventos as $tipoEvento)
                                    <option style="text-transform:capitalize;" value="{{ $tipoEvento->id }}">{{ $tipoEvento->nome }}</option>
                                @endforeach
                            </select>
                        </p>
                    </div>
                </div>
                <div class="modal-footer">
                    <input class="btn btn-dark" type="submit" value="Enviar" />
                    <input class="btn btn-dark" type="reset" value="Limpar" />
                </div>
            </form>
        </div>
    </div>
</div>
