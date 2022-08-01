<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="card mb-3" style="max-width:600px; margin:auto;">
    <div class="card-header">
        <h6 class="card-title"><?= trans('beam formulas') ?></h6>
    </div>
    <img class="card-img-top" style="max-width: 450px; margin:auto;" src="<?= base_url() ?>/images/beam-01.jpg" alt="Beam Formulas" id="imageBeamFormulas">
    <div class="card-header" id="labelBeamFormulaType"><?= trans('lblSimpleBeam1') ?></div>
    <div class="card-body">

        <div class="mb-2 row pb-2 border-bottom">
            <label for="inputBeamFormulaType" class="col-3 col-form-label"><?= trans('type') ?></label>
            <select id="inputBeamFormulaType" class="col-9" onchange="changeType()">
                <option selected value="1"><?= trans('simple beam') ?> - 1</option>
                <option value="2"><?= trans('simple beam') ?> - 2</option>
                <option value="3"><?= trans('simple beam') ?> - 3</option>
                <option value="4"><?= trans('simple beam') ?> - 4</option>
                <option value="5"><?= trans('simple beam') ?> - 5</option>
                <option value="11"><?= trans('cantilever beam') ?> - 1</option>
                <option value="12"><?= trans('cantilever beam') ?> - 2</option>
                <option value="21"><?= trans('overhang beam') ?> - 1</option>
                <option value="22"><?= trans('overhang beam') ?> - 2</option>
                <option value="31"><?= trans('fixed ends beam') ?> - 1</option>
                <option value="32"><?= trans('fixed ends beam') ?> - 2</option>
            </select>
        </div>

        <div class="mb-2 row pb-2 border-bottom">
            <label for="inputLength" class="col-5 col-form-label"><?= trans('span length') ?>, L</label>
            <input type="text" class="col-4" id="inputLength" value="4.5">
            <label class="col-3 col-form-label">m</label>
        </div>

        <div class="mb-2 row pb-2 border-bottom overhang" style="display:none">
            <label for="inputLength1" class="col-5 col-form-label"><?= trans('span length') ?>, L<sub>1</sub></label>
            <input type="text" class="col-4" id="inputLength1" value="1.5">
            <label class="col-3 col-form-label">m</label>
        </div>

        <div class="mb-2 row pb-2 border-bottom uniload">
            <label for="inputUniformLoad" class="col-5 col-form-label"><?= trans('load') ?>, Q</label>
            <input type="text" class="col-4" id="inputUniformLoad" value="8">
            <label class="col-3 col-form-label">kN/m</label>
        </div>

        <div class="row pt-2 uniload1" style="display:none">
            <label for="inputDistanceQ" class="col-5 col-form-label"><?= trans('distance') ?>, a</label>
            <input type="text" class="col-4" id="inputDistanceQ" value="2">
            <label class="col-3 col-form-label">m</label>
        </div>
        <div class="mb-2 row px-3 pb-3 border-bottom uniload1" style="display:none">
            <input type="range" min="0" max="4.5" value="2" class="form-control-range mt-2" id="rangeDistanceQ">
        </div>

        <div class="mb-2 row pb-2 border-bottom pload1" style="display:none">
            <label for="inputPointLoad1" class="col-5 col-form-label"><?= trans('load') ?>, P1</label>
            <input type="text" class="col-4" id="inputPointLoad1" value="12">
            <label class="col-3 col-form-label">kN</label>
        </div>

        <div class="row pt-2 pload1" style="display:none">
            <label for="inputDistanceP1" class="col-5 col-form-label"><?= trans('distance') ?>, a</label>
            <input type="text" class="col-4" id="inputDistanceP1" value="0">
            <label class="col-3 col-form-label">m</label>
        </div>
        <div class="mb-2 row px-3 pb-3 border-bottom pload1" style="display:none">
            <input type="range" min="0" value="0" class="form-control-range mt-2" id="rangeDistanceP1">
        </div>

        <div class="row pt-2">
            <label for="inputDistanceX" class="col-5 col-form-label"><?= trans('distance') ?>, x</label>
            <input type="text" class="col-4" id="inputDistanceX" value="0">
            <label class="col-3 col-form-label">m</label>
        </div>
        <div class="mb-2 row px-3 pb-3 border-bottom">
            <input type="range" min="0" value="0" class="form-control-range mt-2" id="rangeDistanceX">
        </div>

        <div class="mb-2">
            <div class="row mx-1">
                <div class="form-check col-6">
                    <input class="form-check-input radioEI" type="radio" name="radioEI" id="radioEI1" value="1" checked>
                    <label class="form-check-label" for="radioEI"><?= trans('EI constant') ?></label>
                </div>
                <div class="form-check col-6">
                    <input class="form-check-input radioEI" type="radio" name="radioEI" id="radioEI2" value="2">
                    <label class="form-check-label" for="radioEI2"><?= trans('EI input') ?></label>
                </div>
            </div>
            <div class="mt-3" id="eiInput" style="display:none">
                <div class="mb-2 row pb-2">
                    <label for="inputElasticity" class="col-5 col-form-label"><?= trans('mod. elasticity') ?>, E</label>
                    <input type="text" class="col-4" id="inputElasticity" value="200000">
                    <label class="col-3 col-form-label">MPa</label>
                </div>
                <div class="mb-2 row">
                    <label for="inputInertia" class="col-5 col-form-label"><?= trans('inertia') ?>, I</label>
                    <input type="text" class="col-4" id="inputInertia" value="1000000">
                    <label class="col-3 col-form-label">mm<sup>4</sup></label>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="card mb-3" style="max-width:600px; margin:auto;">
    <div class="card-header"><?= strtoupper(trans('result')) ?></div>
    <div class="card-body" id="result">

        <div class="p-1"><u><?= trans('support reaction') ?></u></div>
        <div class="row mx-0 my-1">
            <div class="col-3">R<sub>A</sub></div>
            <div class="col-1">=</div>
            <div class="col-3" id="resultRa">18.6</div>
            <div class="col-4">kN</div>
        </div>
        <div class="row mx-0 my-1 no-cantilever">
            <div class="col-3">R<sub>B</sub></div>
            <div class="col-1">=</div>
            <div class="col-3" id="resultRb">18.5</div>
            <div class="col-4">kN</div>
        </div>

        <div class="p-1"><u><?= trans('moment') ?></u></div>
        <div class="row mx-0 my-1">
            <div class="col-3">M<sub>MAX</sub></div>
            <div class="col-1">=</div>
            <div class="col-3" id="resultMmax">186.6</div>
            <div class="col-4">kNm</div>
        </div>
        <div class="row mx-0 my-1">
            <div class="col-3"><?= trans('at') ?> x</div>
            <div class="col-1">=</div>
            <div class="col-3" id="distMmax">54.4</div>
            <div class="col-4">m</div>
        </div>
        <div class="row mx-0 my-1 overhang" style="display:none">
            <div class="col-3">M<sub>MAX2</sub></div>
            <div class="col-1">=</div>
            <div class="col-3" id="resultMmax2">186.6</div>
            <div class="col-4">kNm</div>
        </div>
        <div class="row mx-0 my-1 fixed" style="display:none">
            <div class="col-3">M<sub>A</sub></div>
            <div class="col-1">=</div>
            <div class="col-3" id="resultMa">186.6</div>
            <div class="col-4">kNm</div>
        </div>
        <div class="row mx-0 my-1 fixed" style="display:none">
            <div class="col-3">M<sub>B</sub></div>
            <div class="col-1">=</div>
            <div class="col-3" id="resultMb">186.6</div>
            <div class="col-4">kNm</div>
        </div>


        <div class="p-1"><u><?= trans('shear') ?></u></div>
        <div class="row mx-0 my-1">
            <div class="col-3">V<sub>A</sub></div>
            <div class="col-1">=</div>
            <div class="col-3" id="resultVa">35.5</div>
            <div class="col-4">kN</div>
        </div>
        <div class="row mx-0 my-1 no-cantilever">
            <div class="col-3">V<sub>B</sub></div>
            <div class="col-1">=</div>
            <div class="col-3" id="resultVb">74.5</div>
            <div class="col-4">kN</div>
        </div>
        <div class="row mx-0 my-1 shearVb2" style="display:none">
            <div class="col-3">V<sub>B2</sub></div>
            <div class="col-1">=</div>
            <div class="col-3" id="resultVb2">74.5</div>
            <div class="col-4">kN</div>
        </div>

        <div class="p-1"><u><?= trans('deflection') ?></u></div>
        <div class="row mx-0 my-1">
            <div class="col-3">Y<sub>MAX</sub></div>
            <div class="col-1">=</div>
            <div class="col-3" id="resultYmax">54.4</div>
            <div class="col-4 eiUnit">m/EI<sup>(*)</sup></div>
        </div>
        <div class="row mx-0 my-1">
            <div class="col-3"><?= trans('at') ?> x</div>
            <div class="col-1">=</div>
            <div class="col-3" id="distYmax">54.4</div>
            <div class="col-4">m</div>
        </div>
        <div class="row mx-0 my-1 overhang" style="display:none">
            <div class="col-3">Y<sub>MAX2</sub></div>
            <div class="col-1">=</div>
            <div class="col-3" id="resultYmax2">54.4</div>
            <div class="col-4 eiUnit">m/EI<sup>(*)</sup></div>
        </div>

        <div class="p-1"><u><?= trans('value at') ?> X</u></div>
        <div class="row mx-0 my-1">
            <div class="col-3">M<sub>x</sub></div>
            <div class="col-1">=</div>
            <div class="col-3" id="resultMx">14.4</div>
            <div class="col-4">kNm</div>
        </div>
        <div class="row mx-0 my-1">
            <div class="col-3">V<sub>x</sub></div>
            <div class="col-1">=</div>
            <div class="col-3" id="resultVx">9.4</div>
            <div class="col-4">kN</div>
        </div>
        <div class="row mx-0 my-1">
            <div class="col-3">Y<sub>x</sub></div>
            <div class="col-1">=</div>
            <div class="col-3" id="resultYx">54.3</div>
            <div class="col-4 eiUnit">m/EI<sup>(*)</sup></div>
        </div>

        <div id="notes" class="p-3">
            <div class="small"><?= trans('notes') ?>:</div>
            <div class="small">* : <?= trans('EI in') ?> kN.m<sup>2</sup></div>
        </div>

        <hr>
        <button type="button" class="btn float-right" data-toggle="tooltip" data-placement="left" title="<?= trans('print this page') ?>" onclick="window.print()">
            <img src="<?= base_url() ?>/images/icon_print_blue.png" alt="print" style="max-width:36px">
        </button>
    </div>
</div>

<?= $this->endSection() ?>