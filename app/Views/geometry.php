<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="card mb-3" style="max-width:600px; margin:auto;">
    <div class="card-header">
        <h6 class="card-title"><?= strtoupper(trans('basic geometry')) ?></h6>
    </div>
    <img class="card-img-top" style="max-width: 450px; margin:auto;" src="<?= base_url() ?>/images/geo-rectangle.jpg" alt="Rectangle" id="imageGeometry">
    <div class="card-header" id="labelGeometryType"><?= trans('rectangle') ?></div>

    <div class="card-body">

        <div class="mb-2 row pb-2 border-bottom">
            <label for="inputGeometryType" class="col-3 col-form-label"><?= trans('shape') ?></label>
            <select id="inputGeometryType" class="col-9" onchange="changeType()">
                <option selected value="rec"><?= trans('rectangle') ?></option>
                <option value="tri"><?= trans('triangle') ?></option>
                <option value="cir"><?= trans('circle') ?></option>
                <option value="scir"><?= trans('semi-circle') ?></option>
                <option value="qcir"><?= trans('quarter-circle') ?></option>
                <option value="hcir"><?= trans('hollow-circle') ?></option>
                <option value="ell"><?= trans('ellipse') ?></option>
                <option value="tra"><?= trans('trapezoid') ?></option>
                <option value="hex"><?= trans('hexagon') ?></option>
                <option value="par"><?= trans('parabolic shape') ?></option>
            </select>
        </div>

        <!-------------------------------------- INPUT BLOCK -------------------------------------->
        <div class="inputblock">

            <div class="input" id="rec">
                <div class="mb-2 row pb-2 border-bottom">
                    <label for="inputVar1" class="col-5 col-form-label"><?= trans('width') ?>, B</label>
                    <input type="text" class="col-4 inputVar1" id="inputVar1" value="400">
                    <label class="col-3 col-form-label"></label>
                </div>
                <div class="mb-2 row">
                    <label for="inputVar2" class="col-5 col-form-label"><?= trans('height') ?>, H</label>
                    <input type="text" class="col-4 inputVar2" id="inputVar2" value="600">
                    <label class="col-3 col-form-label"></label>
                </div>
            </div>

            <div class="input" id="tri">
                <div class="mb-2 row pb-2 border-bottom">
                    <label for="inputVar1" class="col-5 col-form-label"><?= trans('width') ?>, B</label>
                    <input type="text" class="col-4 inputVar1" id="inputVar1" value="400">
                    <label class="col-3 col-form-label"></label>
                </div>
                <div class="mb-2 row">
                    <label for="inputVar2" class="col-5 col-form-label"><?= trans('height') ?>, H</label>
                    <input type="text" class="col-4 inputVar2" id="inputVar2" value="600">
                    <label class="col-3 col-form-label"></label>
                </div>
            </div>

            <div class="input" id="cir">
                <div class="mb-2 row pb-2 border-bottom">
                    <label for="inputVar1" class="col-5 col-form-label"><?= trans('radius') ?>, R</label>
                    <input type="text" class="col-4 inputVar1" id="inputVar1" value="40">
                    <label class="col-3 col-form-label"></label>
                </div>
                <div class="mb-2 row">
                    <label for="inputVar2" class="col-5 col-form-label"><?= trans('diameter') ?>, D</label>
                    <input type="text" class="col-4 inputVar2" id="inputVar2" value="80">
                    <label class="col-3 col-form-label"></label>
                </div>
            </div>

            <div class="input" id="scir">
                <div class="mb-2 row pb-2 border-bottom">
                    <label for="inputVar1" class="col-5 col-form-label"><?= trans('radius') ?>, R</label>
                    <input type="text" class="col-4 inputVar1" id="inputVar1" value="40">
                    <label class="col-3 col-form-label"></label>
                </div>
                <div class="mb-2 row">
                    <label for="inputVar2" class="col-5 col-form-label"><?= trans('diameter') ?>, D</label>
                    <input type="text" class="col-4 inputVar2" id="inputVar2" value="80">
                    <label class="col-3 col-form-label"></label>
                </div>
            </div>

            <div class="input" id="qcir">
                <div class="mb-2 row">
                    <label for="inputVar1" class="col-5 col-form-label"><?= trans('radius') ?>, R</label>
                    <input type="text" class="col-4 inputVar1" id="inputVar1" value="400">
                    <label class="col-3 col-form-label"></label>
                </div>
            </div>

            <div class="input" id="hcir">
                <div class="mb-2 row pb-2 border-bottom">
                    <label for="inputVar1" class="col-5 col-form-label"><?= trans('outer diameter') ?>, OD</label>
                    <input type="text" class="col-4 inputVar1" id="inputVar1" value="400">
                    <label class="col-3 col-form-label"></label>
                </div>
                <div class="mb-2 row pb-2 border-bottom">
                    <label for="inputVar2" class="col-5 col-form-label"><?= trans('inner diameter') ?>, ID</label>
                    <input type="text" class="col-4 inputVar2" id="inputVar2" value="360">
                    <label class="col-3 col-form-label"></label>
                </div>
                <div class="mb-2 row">
                    <label for="inputVar3" class="col-5 col-form-label"><?= trans('thickness') ?>, T</label>
                    <input type="text" class="col-4 inputVar3" id="inputVar3" value="20">
                    <label class="col-3 col-form-label"></label>
                </div>
            </div>

            <div class="input" id="ell">
                <div class="mb-2 row pb-2 border-bottom">
                    <label for="inputVar1" class="col-5 col-form-label"><?= trans('diameter') ?>, B</label>
                    <input type="text" class="col-4 inputVar1" id="inputVar1" value="60">
                    <label class="col-3 col-form-label"></label>
                </div>
                <div class="mb-2 row">
                    <label for="inputVar2" class="col-5 col-form-label"><?= trans('diameter') ?>, H</label>
                    <input type="text" class="col-4 inputVar2" id="inputVar2" value="40">
                    <label class="col-3 col-form-label"></label>
                </div>
            </div>

            <div class="input" id="hex">
                <div class="mb-2 row pb-2 border-bottom">
                    <label for="inputVar1" class="col-5 col-form-label"><?= trans('distance') ?>, A</label>
                    <input type="text" class="col-4 inputVar1" id="inputVar1" value="150">
                    <label class="col-3 col-form-label"></label>
                </div>
                <div class="mb-2 row pb-2 border-bottom">
                    <label for="inputVar2" class="col-5 col-form-label"><?= trans('distance') ?>, H</label>
                    <input type="text" class="col-4 inputVar2" id="inputVar2" value="259.8">
                    <label class="col-3 col-form-label"></label>
                </div>
                <div class="mb-2 row">
                    <label for="inputVar3" class="col-5 col-form-label"><?= trans('distance') ?>, B</label>
                    <input type="text" class="col-4 inputVar3" id="inputVar3" value="300">
                    <label class="col-3 col-form-label"></label>
                </div>
            </div>

            <div class="input" id="tra">
                <div class="mb-2 row pb-2 border-bottom">
                    <label for="inputVar1" class="col-5 col-form-label"><?= trans('distance') ?>, B</label>
                    <input type="text" class="col-4 inputVar1" id="inputVar1" value="400">
                    <label class="col-3 col-form-label"></label>
                </div>
                <div class="mb-2 row pb-2 border-bottom">
                    <label for="inputVar2" class="col-5 col-form-label"><?= trans('distance') ?>, H</label>
                    <input type="text" class="col-4 inputVar2" id="inputVar2" value="250">
                    <label class="col-3 col-form-label"></label>
                </div>
                <div class="mb-2 row pb-2 border-bottom">
                    <label for="inputVar3" class="col-5 col-form-label"><?= trans('distance') ?>, B2</label>
                    <input type="text" class="col-4 inputVar3" id="inputVar3" value="150">
                    <label class="col-3 col-form-label"></label>
                </div>
                <div class="mb-2 row">
                    <label for="inputVar4" class="col-5 col-form-label"><?= trans('distance') ?>, B3</label>
                    <input type="text" class="col-4 inputVar4" id="inputVar4" value="50">
                    <label class="col-3 col-form-label"></label>
                </div>
            </div>

            <div class="input" id="par">
                <div class="mb-2 row pb-2 border-bottom">
                    <label for="inputVar1" class="col-5 col-form-label"><?= trans('width') ?>, B</label>
                    <input type="text" class="col-4 inputVar1" id="inputVar1" value="250">
                    <label class="col-3 col-form-label"></label>
                </div>
                <div class="mb-2 row">
                    <label for="inputVar2" class="col-5 col-form-label"><?= trans('height') ?>, H</label>
                    <input type="text" class="col-4 inputVar2" id="inputVar2" value="450">
                    <label class="col-3 col-form-label"></label>
                </div>
            </div>
        </div>

    </div>
</div>


<!-------------------------------------- RESULT BLOCK -------------------------------------->
<div class="card mb-3" style="max-width:600px; margin:auto;">
    <div class="card-header"><?= strtoupper(trans('result')) ?></div>
    <div class="card-body" id="result">

        <div class="resRowArea">
            <div class="row mx-0 my-1">
                <div class="col-3"><?= trans('area') ?>, A</div>
                <div class="col-1">=</div>
                <div class="col-4 result" id="resultArea">240000</div>
            </div>
        </div>

        <div class="resRowCog">
            <div class="p-1"><u><?= trans('center of gravity') ?></u></div>
            <div class="row mx-0 my-1">
                <div class="col-3">x<sub>1</sub></div>
                <div class="col-1">=</div>
                <div class="col-4 result" id="resultX1">200</div>
            </div>
            <div class="row mx-0 my-1">
                <div class="col-3">x<sub>2</sub></div>
                <div class="col-1">=</div>
                <div class="col-4 result" id="resultX2">200</div>
            </div>
            <div class="row mx-0 my-1">
                <div class="col-3">y<sub>1</sub></div>
                <div class="col-1">=</div>
                <div class="col-4 result" id="resultY1">300</div>
            </div>
            <div class="row mx-0 my-1">
                <div class="col-3">y<sub>2</sub></div>
                <div class="col-1">=</div>
                <div class="col-4 result" id="resultY2">300</div>
            </div>
        </div>

        <div class="resRowInertia">
            <div class="p-1"><u><?= trans('moment of inertia') ?></u></div>
            <div class="row mx-0 my-1">
                <div class="col-3">I<sub>x</sub></div>
                <div class="col-1">=</div>
                <div class="col-4 result" id="resultIx">7.200x1E9</div>
            </div>
            <div class="row mx-0 my-1">
                <div class="col-3">I<sub>y</sub></div>
                <div class="col-1">=</div>
                <div class="col-4 result" id="resultIy">3.200x1E9</div>
            </div>
            <div class="row mx-0 my-1">
                <div class="col-3">I<sub>x</sub>'</div>
                <div class="col-1">=</div>
                <div class="col-4 result" id="resultIx1">7.200x1E9</div>
            </div>
            <div class="row mx-0 my-1">
                <div class="col-3">I<sub>y</sub>'</div>
                <div class="col-1">=</div>
                <div class="col-4 result" id="resultIy1">7.200x1E9</div>
            </div>
        </div>

        <div class="resRowGyration">
            <div class="p-1"><u><?= trans('radius of gyration') ?></u></div>
            <div class="row mx-0 my-1">
                <div class="col-3">r<sub>x</sub></div>
                <div class="col-1">=</div>
                <div class="col-4 result" id="resultRx">173.2</div>
            </div>
            <div class="row mx-0 my-1">
                <div class="col-3">r<sub>y</sub></div>
                <div class="col-1">=</div>
                <div class="col-4 result" id="resultRy">186.6</div>
            </div>
        </div>

        <div class="resRowElasticMod">
            <div class="p-1"><u><?= trans('elastic section modulus') ?></u></div>
            <div class="row mx-0 my-1">
                <div class="col-3">S<sub>x</sub></div>
                <div class="col-1">=</div>
                <div class="col-4 result" id="resultSx">115.47</div>
            </div>
            <div class="row mx-0 my-1">
                <div class="col-3">S<sub>y</sub></div>
                <div class="col-1">=</div>
                <div class="col-4 result" id="resultSy">186.6</div>
            </div>
            <div class="row mx-0 my-1">
                <div class="col-3">S<sub>x_top</sub></div>
                <div class="col-1">=</div>
                <div class="col-4 result" id="resultSx1"></div>
            </div>
            <div class="row mx-0 my-1">
                <div class="col-3">S<sub>x_btm</sub></div>
                <div class="col-1">=</div>
                <div class="col-4 result" id="resultSx2">186.6</div>
            </div>
            <div class="row mx-0 my-1">
                <div class="col-3">S<sub>y_right</sub></div>
                <div class="col-1">=</div>
                <div class="col-4 result" id="resultSy1"></div>
            </div>
            <div class="row mx-0 my-1">
                <div class="col-3">S<sub>y_left</sub></div>
                <div class="col-1">=</div>
                <div class="col-4 result" id="resultSy2">186.6</div>
            </div>
        </div>

        <div id="resRowPlasticMod">
            <div class="p-1"><u><?= trans('plastic section modulus') ?></u></div>
            <div class="row mx-0 my-1">
                <div class="col-3">Z<sub>x</sub></div>
                <div class="col-1">=</div>
                <div class="col-4 result" id="resultZx">2</div>
            </div>
            <div class="row mx-0 my-1">
                <div class="col-3">Z<sub>y</sub></div>
                <div class="col-1">=</div>
                <div class="col-4 result" id="resultZy">1.6x1E7</div>
            </div>
        </div>

        <div id="notes" class="p-3" hidden>
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