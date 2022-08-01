<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="card mb-3" style="max-width:600px; margin:auto;">
    <div class="card-header">
        <h6><?= trans('steel material standards') ?></h6>
    </div>
    <!-- <img class="card-img-top" style="max-width: 450px; margin:auto;" src="<?= base_url() ?>/images/geo-rectangle.jpg" alt="Rectangle" id="imageGeometry"> -->

    <div class="card-body">

        <div class="mb-2 row pb-2 mx-auto" style="min-width:95%">
            <label for="inputMaterialStandard" class="col-3 col-form-label"><?= trans('code') ?></label>
            <select id="inputMaterialStandard" class="col-9">
                <option selected value="#table-astm">American - ASTM</option>
                <option value="#table-as">Australian/New Zealand - AS/NZ</option>
                <option value="#table-ch">Chinese - GB 50017</option>
                <option value="#table-en">Europe - EN 10025</option>
                <option value="#table-id">Indonesian - SNI</option>
                <option value="#table-jis">Japanese - JIS</option>
                <option value="#table-din">German Standard - DIN</option>
            </select>
        </div>

        <!-------------------------------------- RESULT BLOCK -------------------------------------->
        <div class="table-responsive-sm" style="width:97%; margin:auto;">
            <table class="table table-sm">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Grade</th>
                        <th scope="col">Thk (mm)</th>
                        <th scope="col">fy (MPa)</th>
                        <th scope="col">fu (MPa)</th>
                    </tr>
                </thead>
                <!---------------------------------------------------------------- ASTM -->
                <tbody class="tbody" id="table-astm">
                    <tr>
                        <th scope="row">A36</th>
                        <td>t &le; 75</td>
                        <td>250</td>
                        <td>400 ~ 500</td>
                    </tr>
                    <tr class="table-hl">
                        <th scope="row" rowspan="3">A242</th>
                        <td>t &le; 40</td>
                        <td>345</td>
                        <td>485</td>
                    </tr>
                    <tr class="table-hl">
                        <td>40 &lt; t &le; 50</td>
                        <td>315</td>
                        <td>460</td>
                    </tr>
                    <tr class="table-hl">
                        <td>t &gt; 50</td>
                        <td>290</td>
                        <td>435</td>
                    </tr>
                    <tr>
                        <th scope="row" rowspan="2">A514</th>
                        <td>t &le; 65</td>
                        <td>690</td>
                        <td>760 ~ 895</td>
                    </tr>
                    <tr>
                        <td>65 &lt; t &le; 150</td>
                        <td>620</td>
                        <td>690 ~ 895</td>
                    </tr>
                    <tr class="table-hl">
                        <th scope="row">A529 - Gr.50</th>
                        <td>t &le; 40</td>
                        <td>345</td>
                        <td>485 ~ 690</td>
                    </tr>
                    <tr class="table-hl">
                        <th scope="row">A529 - Gr.55</th>
                        <td>t &le; 40</td>
                        <td>380</td>
                        <td>485 ~ 690</td>
                    </tr>
                    <tr>
                        <th scope="row">A572 - Gr.42</th>
                        <td><?= trans('all') ?></td>
                        <td>290</td>
                        <td>415</td>
                    </tr>
                    <tr>
                        <th scope="row">A572 - Gr.50</th>
                        <td><?= trans('all') ?></td>
                        <td>345</td>
                        <td>450</td>
                    </tr>
                    <tr>
                        <th scope="row">A572 - Gr.55</th>
                        <td><?= trans('all') ?></td>
                        <td>380</td>
                        <td>485</td>
                    </tr>
                    <tr>
                        <th scope="row">A572 - Gr.60</th>
                        <td>t &le; 50</td>
                        <td>415</td>
                        <td>520</td>
                    </tr>
                    <tr>
                        <th scope="row">A572 - Gr.65</th>
                        <td>t &le; 50</td>
                        <td>450</td>
                        <td>550</td>
                    </tr>
                    <tr class="table-hl">
                        <th scope="row">A588</th>
                        <td><?= trans('all') ?></td>
                        <td>345</td>
                        <td>485</td>
                    </tr>
                    <tr>
                        <th scope="row">A633 - Gr.A</th>
                        <td>t &le; 100</td>
                        <td>290</td>
                        <td>430 ~ 570</td>
                    </tr>
                    <tr>
                        <th scope="row" rowspan="2">A633 - Gr.C<br>A633 - Gr. D</th>
                        <td>t &le; 65</td>
                        <td>345</td>
                        <td>485 ~ 620</td>
                    </tr>
                    <tr>
                        <td>65 &lt; t &le; 100</td>
                        <td>315</td>
                        <td>450 ~ 590</td>
                    </tr>
                    <tr>
                        <th scope="row">A633 - Gr.E</th>
                        <td>t &le; 100</td>
                        <td>415</td>
                        <td>550 ~ 690</td>
                    </tr>
                    <tr class="table-hl">
                        <th scope="row">A709 - Gr.36</th>
                        <td>t &le; 75</td>
                        <td>250</td>
                        <td>400 ~ 550</td>
                    </tr>
                    <tr class="table-hl">
                        <th scope="row">A709 - Gr.50</th>
                        <td>&nbsp;</td>
                        <td>345</td>
                        <td>450</td>
                    </tr>
                    <tr>
                        <th scope="row">A852</th>
                        <td>&nbsp;</td>
                        <td>485</td>
                        <td>620 ~ 760</td>
                    </tr>
                    <tr class="table-hl">
                        <th scope="row">A871 - Gr.60</th>
                        <td>&nbsp;</td>
                        <td>415</td>
                        <td>520</td>
                    </tr>
                    <tr class="table-hl">
                        <th scope="row">A871 - Gr.65</th>
                        <td>&nbsp;</td>
                        <td>450</td>
                        <td>550</td>
                    </tr>
                    <tr>
                        <th scope="row">A913 - Gr.50</th>
                        <td>&nbsp;</td>
                        <td>345</td>
                        <td>450</td>
                    </tr>
                    <tr>
                        <th scope="row">A913 - Gr.60</th>
                        <td>&nbsp;</td>
                        <td>415</td>
                        <td>520</td>
                    </tr>
                    <tr>
                        <th scope="row">A913 - Gr.65</th>
                        <td>&nbsp;</td>
                        <td>450</td>
                        <td>550</td>
                    </tr>
                    <tr>
                        <th scope="row">A913 - Gr.70</th>
                        <td>&nbsp;</td>
                        <td>485</td>
                        <td>620</td>
                    </tr>

                </tbody>

                <!---------------------------------------------------------------- JIS -->
                <tbody class="tbody" id="table-jis">
                    <tr>
                        <th scope="row">G3101 SS330</th>
                        <td>16 &lt; t &le; 40</td>
                        <td>195</td>
                        <td>330 ~ 430</td>
                    </tr>
                    <tr class="table-hl">
                        <th scope="row" rowspan="2">G3101 SS400</th>
                        <td>t &le; 16</td>
                        <td>245</td>
                        <td>400 ~ 510</td>
                    </tr>
                    <tr class="table-hl">
                        <td>16 &lt; t &le; 40</td>
                        <td>235</td>
                        <td>400 ~ 510</td>
                    </tr>
                    <tr>
                        <th scope="row">G3101 SS490</th>
                        <td>16 &lt; t &le; 40</td>
                        <td>275</td>
                        <td>490 ~ 610</td>
                    </tr>
                    <tr class="table-hl">
                        <th scope="row">G3101 SS540</th>
                        <td>16 &lt; t &le; 40</td>
                        <td>390</td>
                        <td>540</td>
                    </tr>
                    <tr>
                        <th scope="row">G3106 SM400A</th>
                        <td>16 &lt; t &le; 40</td>
                        <td>235</td>
                        <td>400 ~ 510</td>
                    </tr>
                    <tr>
                        <th scope="row">G3106 SM400B</th>
                        <td>16 &lt; t &le; 40</td>
                        <td>235</td>
                        <td>400 ~ 510</td>
                    </tr>
                    <tr>
                        <th scope="row">G3106 SM400C</th>
                        <td>16 &lt; t &le; 40</td>
                        <td>235</td>
                        <td>400 ~ 510</td>
                    </tr>
                    <tr class="table-hl">
                        <th scope="row">G3106 SM490A</th>
                        <td>16 &lt; t &le; 40</td>
                        <td>315</td>
                        <td>490 ~ 610</td>
                    </tr>
                    <tr class="table-hl">
                        <th scope="row">G3106 SM490B</th>
                        <td>16 &lt; t &le; 40</td>
                        <td>315</td>
                        <td>490 ~ 610</td>
                    </tr>
                    <tr class="table-hl">
                        <th scope="row">G3106 SM490C</th>
                        <td>16 &lt; t &le; 40</td>
                        <td>315</td>
                        <td>490 ~ 610</td>
                    </tr>
                    <tr>
                        <th scope="row">G3136 SN400A</th>
                        <td>16 &lt; t &le; 40</td>
                        <td>235</td>
                        <td>400 ~ 510</td>
                    </tr>
                    <tr>
                        <th scope="row">G3136 SN400B</th>
                        <td>16 &lt; t &le; 40</td>
                        <td>235</td>
                        <td>400 ~ 510</td>
                    </tr>
                    <tr>
                        <th scope="row">G3136 SN400C</th>
                        <td>16 &lt; t &le; 40</td>
                        <td>235</td>
                        <td>400 ~ 510</td>
                    </tr>
                    <tr class="table-hl">
                        <th scope="row">G3136 SN490B</th>
                        <td>16 &lt; t &le; 40</td>
                        <td>325</td>
                        <td>490 ~ 610</td>
                    </tr>
                    <tr class="table-hl">
                        <th scope="row">G3136 SN490C</th>
                        <td>16 &lt; t &le; 40</td>
                        <td>325</td>
                        <td>490 ~ 610</td>
                    </tr>
                </tbody>

                <!---------------------------------------------------------------- EUROPE -->
                <tbody class="tbody" id="table-en">
                    <tr>
                        <th scope="row">S185</th>
                        <td>t &le; 16</td>
                        <td>185</td>
                        <td>310 ~ 540</td>
                    </tr>
                    <tr class="table-hl">
                        <th scope="row" rowspan="3">S235</th>
                        <td>t &le; 16</td>
                        <td>235</td>
                        <td>360 ~ 510</td>
                    </tr>
                    <tr class="table-hl">
                        <td>16 &lt; t &le; 40</td>
                        <td>225</td>
                        <td>360 ~ 510</td>
                    </tr>
                    <tr class="table-hl">
                        <td>40 &lt; t &le; 63</td>
                        <td>215</td>
                        <td>360 ~ 510</td>
                    </tr>
                    <tr>
                        <th scope="row" rowspan="3">S275</th>
                        <td>t &le; 16</td>
                        <td>275</td>
                        <td>430 ~ 580</td>
                    </tr>
                    <tr>
                        <td>16 &lt; t &le; 40</td>
                        <td>265</td>
                        <td>430 ~ 580</td>
                    </tr>
                    <tr>
                        <td>40 &lt; t &le; 63</td>
                        <td>255</td>
                        <td>430 ~ 580</td>
                    </tr>
                    <tr class="table-hl">
                        <th scope="row" rowspan="3">S355</th>
                        <td>t &le; 16</td>
                        <td>355</td>
                        <td>510 ~ 680</td>
                    </tr>
                    <tr class="table-hl">
                        <td>16 &lt; t &le; 40</td>
                        <td>345</td>
                        <td>510 ~ 680</td>
                    </tr>
                    <tr class="table-hl">
                        <td>40 &lt; t &le; 63</td>
                        <td>335</td>
                        <td>510 ~ 680</td>
                    </tr>
                    <tr>
                        <th scope="row">E295</th>
                        <td>t &le; 16</td>
                        <td>295</td>
                        <td>490 ~ 660</td>
                    </tr>
                </tbody>

                <!---------------------------------------------------------------- TEMPLATE -->
                <tbody class="tbody" id="table-nan">
                    <tr>
                        <th scope="row">DIN</th>
                        <td>t &le; 75m</td>
                        <td>250</td>
                        <td>400 - 500</td>
                    </tr>
                </tbody>

                <!---------------------------------------------------------------- CHINA -->
                <tbody class="tbody" id="table-ch">
                    <tr>
                        <th scope="row">Q195</th>
                        <td>&nbsp;</td>
                        <td>195</td>
                        <td>315 ~ 430</td>
                    </tr>
                    <tr class="table-hl">
                        <th scope="row" rowspan="3">Q215</th>
                        <td>&nbsp;</td>
                        <td>215</td>
                        <td>335 ~ 450</td>
                    </tr>
                    <tr class="table-hl">
                        <td>&nbsp;</td>
                        <td>205</td>
                        <td>335 ~ 450</td>
                    </tr>
                    <tr class="table-hl">
                        <td>&nbsp;</td>
                        <td>195</td>
                        <td>335 ~ 450</td>
                    </tr>
                    <tr>
                        <th scope="row" rowspan="3">Q235</th>
                        <td>t &le; 16</td>
                        <td>235</td>
                        <td>370 ~ 500</td>
                    </tr>
                    <tr>
                        <td>16 &lt; t &le; 40</td>
                        <td>225</td>
                        <td>370 ~ 500</td>
                    </tr>
                    <tr>
                        <td>t &gt; 40</td>
                        <td>215</td>
                        <td>370 ~ 500</td>
                    </tr>
                    <tr class="table-hl">
                        <th scope="row" rowspan="3">Q275</th>
                        <td>t &le; 16</td>
                        <td>275</td>
                        <td>410 ~ 540</td>
                    </tr>
                    <tr class="table-hl">
                        <td>16 &lt; t &le; 40</td>
                        <td>265</td>
                        <td>410 ~ 540</td>
                    </tr>
                    <tr class="table-hl">
                        <td>t &gt; 40</td>
                        <td>255</td>
                        <td>410 ~ 540</td>
                    </tr>
                    <tr>
                        <th scope="row" rowspan="3">Q275</th>
                        <td>t &le; 16</td>
                        <td>275</td>
                        <td>410 ~ 540</td>
                    </tr>
                    <tr>
                        <td>16 &lt; t &le; 40</td>
                        <td>265</td>
                        <td>410 ~ 540</td>
                    </tr>
                    <tr>
                        <td>t &gt; 40</td>
                        <td>255</td>
                        <td>410 ~ 540</td>
                    </tr>
                </tbody>

                <!---------------------------------------------------------------- INDONESIA -->
                <tbody class="tbody" id="table-id">
                    <tr>
                        <th scope="row">Bj 34</th>
                        <td>&nbsp;</td>
                        <td>210</td>
                        <td>340</td>
                    </tr>
                    <tr class="table-hl">
                        <th scope="row">Bj 37</th>
                        <td>&nbsp;</td>
                        <td>240</td>
                        <td>370</td>
                    </tr>
                    <tr>
                        <th scope="row">Bj 41</th>
                        <td>&nbsp;</td>
                        <td>250</td>
                        <td>410</td>
                    </tr>
                    <tr class="table-hl">
                        <th scope="row">Bj 50</th>
                        <td>&nbsp;</td>
                        <td>290</td>
                        <td>500</td>
                    </tr>
                    <tr>
                        <th scope="row">Bj 55</th>
                        <td>&nbsp;</td>
                        <td>410</td>
                        <td>550</td>
                    </tr>
                </tbody>

                <!---------------------------------------------------------------- DIN -->
                <tbody class="tbody" id="table-din">
                    <tr>
                        <th scope="row" rowspan="2">St33</th>
                        <td>t &le; 16</td>
                        <td>185</td>
                        <td>290</td>
                    </tr>
                    <tr>
                        <td>16 &lt; t &le; 40</td>
                        <td>175</td>
                        <td>290</td>
                    </tr>
                    <tr class="table-hl">
                        <th scope="row" rowspan="3">St37-2</th>
                        <td>t &le; 16</td>
                        <td>235</td>
                        <td>340 ~ 470</td>
                    </tr>
                    <tr class="table-hl">
                        <td>16 &lt; t &le; 40</td>
                        <td>225</td>
                        <td>340 ~ 470</td>
                    </tr>
                    <tr class="table-hl">
                        <td>40 &lt; t &le; 63</td>
                        <td>215</td>
                        <td>340 ~ 470</td>
                    </tr>
                    <tr>
                        <th scope="row" rowspan="3">St37-3</th>
                        <td>t &le; 16</td>
                        <td>235</td>
                        <td>340 ~ 470</td>
                    </tr>
                    <tr>
                        <td>16 &lt; t &le; 40</td>
                        <td>225</td>
                        <td>340 ~ 470</td>
                    </tr>
                    <tr>
                        <td>40 &lt; t &le; 63</td>
                        <td>215</td>
                        <td>340 ~ 470</td>
                    </tr>
                    <tr class="table-hl">
                        <th scope="row" rowspan="3">St44-2</th>
                        <td>t &le; 16</td>
                        <td>275</td>
                        <td>410 ~ 540</td>
                    </tr>
                    <tr class="table-hl">
                        <td>16 &lt; t &le; 40</td>
                        <td>265</td>
                        <td>410 ~ 540</td>
                    </tr>
                    <tr class="table-hl">
                        <td>40 &lt; t &le; 63</td>
                        <td>255</td>
                        <td>410 ~ 540</td>
                    </tr>
                    <tr>
                        <th scope="row" rowspan="3">St44-3</th>
                        <td>t &le; 16</td>
                        <td>275</td>
                        <td>410 ~ 540</td>
                    </tr>
                    <tr>
                        <td>16 &lt; t &le; 40</td>
                        <td>265</td>
                        <td>410 ~ 540</td>
                    </tr>
                    <tr>
                        <td>40 &lt; t &le; 63</td>
                        <td>255</td>
                        <td>410 ~ 540</td>
                    </tr>
                    <tr class="table-hl">
                        <th scope="row" rowspan="3">St50-2</th>
                        <td>t &le; 16</td>
                        <td>295</td>
                        <td>470 ~ 610</td>
                    </tr>
                    <tr class="table-hl">
                        <td>16 &lt; t &le; 40</td>
                        <td>285</td>
                        <td>470 ~ 610</td>
                    </tr>
                    <tr class="table-hl">
                        <td>40 &lt; t &le; 63</td>
                        <td>275</td>
                        <td>470 ~ 610</td>
                    </tr>
                    <tr>
                        <th scope="row" rowspan="3">St52-3</th>
                        <td>t &le; 16</td>
                        <td>355</td>
                        <td>490 ~ 630</td>
                    </tr>
                    <tr>
                        <td>16 &lt; t &le; 40</td>
                        <td>345</td>
                        <td>490 ~ 630</td>
                    </tr>
                    <tr>
                        <td>40 &lt; t &le; 63</td>
                        <td>335</td>
                        <td>490 ~ 630</td>
                    </tr>
                    <tr class="table-hl">
                        <th scope="row" rowspan="3">St60-2</th>
                        <td>t &le; 16</td>
                        <td>335</td>
                        <td>570 ~ 710</td>
                    </tr>
                    <tr class="table-hl">
                        <td>16 &lt; t &le; 40</td>
                        <td>325</td>
                        <td>570 ~ 710</td>
                    </tr>
                    <tr class="table-hl">
                        <td>40 &lt; t &le; 63</td>
                        <td>315</td>
                        <td>570 ~ 710</td>
                    </tr>
                    <tr>
                        <th scope="row" rowspan="3">St70-3</th>
                        <td>t &le; 16</td>
                        <td>365</td>
                        <td>670 ~ 830</td>
                    </tr>
                    <tr>
                        <td>16 &lt; t &le; 40</td>
                        <td>355</td>
                        <td>670 ~ 830</td>
                    </tr>
                    <tr>
                        <td>40 &lt; t &le; 63</td>
                        <td>345</td>
                        <td>670 ~ 830</td>
                    </tr>
                </tbody>

                <!---------------------------------------------------------------- AS/NZ -->
                <tbody class="tbody" id="table-as">
                    <tr>
                        <th scope="row" rowspan="2">400</th>
                        <td>t &ge; 40</td>
                        <td>380</td>
                        <td>520</td>
                    </tr>
                    <tr>
                        <td>t &lt; 40</td>
                        <td>400</td>
                        <td>520</td>
                    </tr>
                    <tr class="table-hl">
                        <th scope="row" rowspan="3">350</th>
                        <td>t &ge; 40</td>
                        <td>330</td>
                        <td>480</td>
                    </tr>
                    <tr class="table-hl">
                        <td>11 &lt; t &lt; 40</td>
                        <td>340</td>
                        <td>480</td>
                    </tr>
                    <tr class="table-hl">
                        <td>t &le; 11</td>
                        <td>360</td>
                        <td>480</td>
                    </tr>
                    <tr>
                        <th scope="row" rowspan="3">300</th>
                        <td>t &ge; 17</td>
                        <td>280</td>
                        <td>440</td>
                    </tr>
                    <tr>
                        <td>11 &lt; t &lt; 17</td>
                        <td>300</td>
                        <td>440</td>
                    </tr>
                    <tr>
                        <td>t &le; 11</td>
                        <td>320</td>
                        <td>440</td>
                    </tr>
                    <tr class="table-hl">
                        <th scope="row" rowspan="3">250</th>
                        <td>t &ge; 40</td>
                        <td>230</td>
                        <td>410</td>
                    </tr>
                    <tr class="table-hl">
                        <td>11 &lt; t &lt; 40</td>
                        <td>250</td>
                        <td>410</td>
                    </tr>
                    <tr class="table-hl">
                        <td>t &le; 11</td>
                        <td>260</td>
                        <td>410</td>
                    </tr>
                </tbody>

            </table>


            <hr>
            <button type="button" class="btn btn-block text-right" data-toggle="tooltip" data-placement="left" title="<?= trans('print this page') ?>" onclick="window.print()">
                <img src="<?= base_url() ?>/images/icon_print_blue.png" alt="print" style="max-width:36px">
            </button>

        </div>







        <?= $this->endSection() ?>