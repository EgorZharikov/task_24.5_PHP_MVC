<div class="container col-sm-4">
    <div class="row img-card align-items-center">
        <div class="card bg-light">
            <div class="card-header">
                Выберите изображение для преобразования:
            </div>
            <div class="card-body">
                <form action="main/img" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <div class="input-group">
                            <input type="file" class="form-control" name="files[]" accept=".jpg,.png" id="inputFile" aria-describedby="inputFileAddon" aria-label="Upload">
                            <button class="btn btn-outline-secondary" type="submit" id="inputFileAddon">Применить стиль</button>
                        </div>
                        <div class="form-check form-check-inline mt-3">
                            <input class="form-check-input" type="radio" name="imgStyle" id="inlineRadio1" value="NEGATE" checked>
                            <label class="form-check-label" for="inlineRadio1">NEGATE</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="imgStyle" id="inlineRadio2" value="EMBOSS">
                            <label class="form-check-label" for="inlineRadio2">EMBOSS</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="imgStyle" id="inlineRadio3" value="GAUSSIAN_BLUR">
                            <label class="form-check-label" for="inlineRadio3">GAUSSIAN_BLUR</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="imgStyle" id="inlineRadio4" value="MEAN_REMOVAL">
                            <label class="form-check-label" for="inlineRadio4">MEAN_REMOVAL</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="imgStyle" id="inlineRadio5" value="GRAYSCALE">
                            <label class="form-check-label" for="inlineRadio5">GRAYSCALE</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="imgStyle" id="inlineRadio6" value="SMOOTH">
                            <label class="form-check-label" for="inlineRadio6">SMOOTH</label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
