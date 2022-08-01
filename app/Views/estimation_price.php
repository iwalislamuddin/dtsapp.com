<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="card mb-3" style="max-width:600px; margin:auto;">
    <div class="card-header">
        <h6><?= trans('price estimation') ?></h6>
    </div>
    <!-- <img class="card-img-top" style="max-width: 450px; margin:auto;" src="<?= base_url() ?>/images/geo-rectangle.jpg" alt="Rectangle" id="imageGeometry"> -->

    <ul class="nav nav-tabs nav-justified mt-2 px-2" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link tab-text active" id="tabInputs" href="#inputs" role="tab" aria-controls="inputs" aria-selected="true">Inputs</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link tab-text" id="tabSettings" href="#settings" role="tab" aria-controls="settings" aria-selected="false">Settings</a>
        </li>
    </ul>

    <div class="card-body">

        <div class="tab-content noprint" id="myTabContent">
            <div class="tab-pane fade show active" id="inputs" role="tabpanel" aria-labelledby="tabInputs">
                <div class="mb-2 row pb-2 border-bottom noprint">
                    <label for="selectType" class="col-3 col-form-label"><?= trans('type') ?></label>
                    <select id="selectType" class="col-9">
                        <option selected value="slab"><?= trans('slab') ?></option>
                        <option value="beam"><?= trans('beam') ?></option>
                        <option value="column"><?= trans('column') ?></option>
                        <option value="wall"><?= trans('wall') ?></option>
                        <option value="footing"><?= trans('footing') ?></option>
                        <option value="pilecap"><?= trans('pilecap') ?></option>
                        <option value="pile"><?= trans('pile') ?></option>
                    </select>
                </div>
                <div class="inputblock">
                    <div class="input">
                        <div class="mb-2 row">
                            <label for="inputDescription" class="col-5 col-form-label"><?= trans('description') ?></label>
                            <input type="text" class="col-4 inputDescription" id="inputDescription" value="Slab S1">
                            <label class="col-3 col-form-label"></label>
                        </div>
                        <div class="mb-2 row">
                            <label for="inputVar1" class="col-5 col-form-label" id="labelVar1"><?= trans('length') ?>, L</label>
                            <input type="text" class="col-4 inputVar1" id="inputVar1" value="2.5">
                            <label class="col-3 col-form-label">m</label>
                        </div>
                        <div class="mb-2 row">
                            <label for="inputVar2" class="col-5 col-form-label" id="labelVar2"><?= trans('width') ?>, W</label>
                            <input type="text" class="col-4 inputVar2" id="inputVar2" value="2.5">
                            <label class="col-3 col-form-label">m</label>
                        </div>
                        <div class="mb-2 row">
                            <label for="inputVar3" class="col-5 col-form-label" id="labelVar3"><?= trans('thikcness') ?>, t</label>
                            <input type="text" class="col-4 inputVar3" id="inputVar3" value="0.15">
                            <label class="col-3 col-form-label">m</label>
                        </div>
                        <div class="mb-2 row" id="rowInputVar4" style="display:none">
                            <label for="inputVar4" class="col-5 col-form-label" id="labelVar4"><?= trans('depth') ?>, z</label>
                            <input type="text" class="col-4 inputVar4" id="inputVar4" value="0.15">
                            <label class="col-3 col-form-label">m</label>
                        </div>
                        <div class="mb-2 row">
                            <label for="inputQty" class="col-5 col-form-label"> <?= trans('quantity') ?> </label>
                            <input type="text" class="col-4 inputQty" id="inputQty" value="2">
                            <label class="col-3 col-form-label"></label>
                        </div>
                    </div>
                </div>

                <button type="button" class="btn btn-block app-primary noprint mt-3" id="btnAdd">
                    <?= trans('add') ?>
                </button>
            </div>

            <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="tabSettings">
                <div class="inputblock">
                    <div class="input">
                        <div class="mb-2 row">
                            <label for="inputCurrency" class="col-5 col-form-label"><?= trans('currency') ?></label>
                            <input type="text" list="curr" class="col-4" id="inputCurrency">
                            <label class="col-3 col-form-label"></label>
                        </div>
                        <datalist id="curr">
                            <option value="AUD">
                            <option value="EUR">
                            <option value="USD">
                            <option value="INR">
                            <option value="IDR">
                            <option value="MYR">
                            <option value="SAR">
                            <option value="GBP">
                        </datalist>

                        <div class="mb-2 row">
                            <label for="inputRebarRateSlab" class="col-5 col-form-label"><?= trans('rebar rate slab') ?></label>
                            <input type="number" class="col-4" id="inputRebarRateSlab" value="75">
                            <label class="col-3 col-form-label">kg/m<sup>3</sup></label>
                        </div>
                        <div class="mb-2 row">
                            <label for="inputRebarRateBeam" class="col-5 col-form-label"><?= trans('rebar rate beam') ?></label>
                            <input type="text" class="col-4" id="inputRebarRateBeam" value="100">
                            <label class="col-3 col-form-label">kg/m<sup>3</sup></label>
                        </div>
                        <div class="mb-2 row">
                            <label for="inputRebarRateColumn" class="col-5 col-form-label"><?= trans('rebar rate column') ?></label>
                            <input type="text" class="col-4" id="inputRebarRateColumn" value="120">
                            <label class="col-3 col-form-label">kg/m<sup>3</sup></label>
                        </div>
                        <div class="mb-2 row">
                            <label for="inputRebarRateWall" class="col-5 col-form-label"><?= trans('rebar rate wall') ?></label>
                            <input type="text" class="col-4" id="inputRebarRateWall" value="80">
                            <label class="col-3 col-form-label">kg/m<sup>3</sup></label>
                        </div>
                        <div class="mb-2 row">
                            <label for="inputRebarRateFooting" class="col-5 col-form-label"><?= trans('rebar rate footing') ?></label>
                            <input type="text" class="col-4" id="inputRebarRateFooting" value="90">
                            <label class="col-3 col-form-label">kg/m<sup>3</sup></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>







    <!-------------------------------------- RESULT BLOCK -------------------------------------->
    <div class="table-responsive-sm mt-3" style="width:97%; margin:auto;">

        <div class="table-responsive my-2" style="width:100%; margin:auto; max-height:600px;">
            <table class="table table-striped" style="table-layout:auto; min-width:360px;" id="tableElements">
                <thead class="thead-dark">
                    <th>Name</th>
                    <th>Size</th>
                    <th>Quantity</th>
                    <th>Action</th>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>

        <div class="table-responsive" style="width:100%; margin:auto; max-height:600px;">
            <table class="table table-striped" style="table-layout:auto; min-width:500px;" id="tableEstimation">
                <thead class="thead-dark">
                    <th>Desc.</th>
                    <th>Spec.</th>
                    <th>Unit</th>
                    <th>Qty</th>
                    <th>Unit Prc</th>
                    <th>Price</th>
                </thead>
            </table>
        </div>



        <hr>
        <button type="button" class="btn btn-block text-right" data-toggle="tooltip" data-placement="left" title="<?= trans('print this page') ?>" onclick="window.print()">
            <img src="<?= base_url() ?>/images/icon_print_blue.png" alt="print" style="max-width:36px">
        </button>

    </div>







    <?= $this->endSection() ?>