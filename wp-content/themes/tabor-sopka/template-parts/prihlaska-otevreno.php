<?php

$rezim = isset($args['rezim']) ? $args['rezim'] : 'otevrena';
$nahradnici = ($rezim === 'nahradnici');
?>

        <section class="prihlaska-otevreno">
            <header class="prihlaska-header">
                <?php if ($nahradnici): ?> 
                    <h1>Přihláška dítěte - náhradník</h1>
                    <div class="nahradnici-info">
                        <p>Kapacita tábora je naplněna na 100%. Přihláška je určena dětem, které se chtějí zapsat na seznam náhradníků.</p>
                        <p>V případě uvolnění místa Vás budeme kontaktovat e-mailem.</p>
                    </div>
                <?php else: ?>
                    <h1>Přihláška dítěte</h1>
                    <p class="otevrena-info">
                        Vyplněním této přihlášky závazně přihlašujete své dítě na tábor. Po odeslání přihlášky Vám přijde potvrzovací e-mail o přijetí přihlášky.
                    </p>
                <?php endif; ?>
            </header>

            <!-- vložit metadata na začátek? - termín, cena atd..? -->

            <form class="prihlaska-form" method="post" action="">

                <!-- Zákonný zástupce č.1 -->
                <section class="prihlaska-sekce mb-4">
                    <h2 class="h3 mb-3">Zákonný zástupce č.1</h2>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="zastupce1-jmeno" class="form-label form-label--required">Jméno a příjmení</label>
                            <input type="text" class="form-control" id="zastupce1-jmeno" name="zastupce1-jmeno" placeholder="Vyplňte" required>
                            <div class="form-text">Formát: Jméno Příjmení</div>
                        </div>
                        <div class="col-md-6">
                            <label for="zastupce1-bydliste" class="form-label form-label--required">Trvalé bydliště</label>
                            <input type="text" class="form-control" id="zastupce1-bydliste" name="zastupce1-bydliste" placeholder="Vyplňte" required>
                            <div class="form-text">Formát: Ulice 123 PSČ Město</div>
                        </div>
                        <div class="col-md-6">
                            <label for="zastupce1-email" class="form-label form-label--required">E-mail</label>
                            <input type="email" class="form-control" id="zastupce1-email" name="zastupce1-email" placeholder="Vyplňte" required>
                            <div class="form-text">Formát: email@example.com</div>
                        </div>
                        <div class="col-md-6">
                            <label for="zastupce1-telefon" class="form-label form-label--required">Telefonní číslo</label>
                            <input type="tel" class="form-control" id="zastupce1-telefon" name="zastupce1-telefon" placeholder="Vyplňte" required>
                            <div class="form-text">Formát: +420 123 456 789</div>
                        </div>
                    </div>
                </section>
                
                <!-- Zákonný zástupce č.2 -->
                <section class="prihlaska-sekce mb-4">
                    <h2 class="h3 mb-3">Zákonný zástupce č.2</h2>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="zastupce2-jmeno" class="form-label">Jméno a příjmení</label>
                            <input type="text" class="form-control" id="zastupce2-jmeno" name="zastupce2-jmeno" placeholder="Vyplňte">
                            <div class="form-text">Formát: Jméno Příjmení</div>
                        </div>
                        <div class="col-md-6">
                            <label for="zastupce2-bydliste" class="form-label">Trvalé bydliště</label>
                            <input type="text" class="form-control" id="zastupce2-bydliste" name="zastupce2-bydliste" placeholder="Vyplňte">
                            <div class="form-text">Formát: Ulice 123 PSČ Město</div>
                        </div>
                        <div class="col-md-6">
                            <label for="zastupce2-email" class="form-label">E-mail</label>
                            <input type="email" class="form-control" id="zastupce2-email" name="zastupce2-email" placeholder="Vyplňte">
                            <div class="form-text">Formát: email@example.com</div>
                        </div>
                        <div class="col-md-6">
                            <label for="zastupce2-telefon" class="form-label">Telefonní číslo</label>
                            <input type="tel" class="form-control" id="zastupce2-telefon" name="zastupce2-telefon" placeholder="Vyplňte">
                            <div class="form-text">Formát: +420 123 456 789</div>
                        </div>
                    </div>
                </section>

                <!-- Informace o dítěti -->
                <section class="prihlaska-sekce mb-4">
                    <h2 class="h3 mb-3">Informace o dítěti</h2>
                    <div class="row g-3">
                        <div class="col-md-3">
                            <label for="dite-jmeno" class="form-label form-label--required">Jméno</label>
                            <input type="text" class="form-control" id="dite-jmeno" name="dite-jmeno" placeholder="Vyplňte" required>
                            <div class="form-text">Formát: Jméno</div>
                        </div>
                        <div class="col-md-3">
                            <label for="dite-prijmeni" class="form-label form-label--required">Příjmení</label>
                            <input type="text" class="form-control" id="dite-prijmeni" name="dite-prijmeni" placeholder="Vyplňte" required>
                            <div class="form-text">Formát: Příjmení</div>
                        </div>
                        <div class="col-md-6">
                            <label for="zastupce2-bydliste" class="form-label form-label--required">Trvalé bydliště</label>
                            <input type="text" class="form-control" id="zastupce2-bydliste" name="zastupce2-bydliste" placeholder="Vyplňte">
                            <div class="form-text">Formát: Ulice 123 PSČ Město</div>
                        </div>
                        <div class="col-md-6">
                            <label for="dite-narozeni" class="form-label form-label--required">Datum narození</label>
                            <input type="date" class="form-control" id="dite-narozeni" name="dite-narozeni" placeholder="Vyplňte" required>
                            <div class="form-text">Formát: DD.MM.RRRR</div>
                        </div>
                        <div class="col-md-6">
                            <label for="dite-trida" class="form-label form-label--required">Dítě vychází ze třídy</label>
                            <select class="form-select" id="dite-trida" name="dite-trida" required>
                                <option value="" selected>Vyberte</option>
                                <option value="1">ze školky</option>
                                <option value="2">1. třída</option>
                                <option value="2">2. třída</option>
                                <option value="3">3. třída</option>
                                <option value="4">4. třída</option>
                                <option value="5">5. třída</option>
                                <option value="6">6. třída</option>
                                <option value="7">7. třída</option>
                                <option value="8">8. třída</option>
                                <option value="9">9. třída</option>
                                <option value="9">střední škola</option>
                            </select>
                            <div class="form-text">Kliknutím na políčko vyberte možnost</div>
                        </div>
                        <div class="col-12">
                            <label for="dite-doplneni" class="form-label">Doplňující informace - alergie, léky, zdravotní problémy, omezení</label>
                            <textarea class="form-control" id="dite-doplneni" name="dite-doplneni" rows="4" placeholder="Vyplňte"></textarea>
                            <div class="form-text">Uveďte veškeré důležité informace, které by mělo vedení tábora o dítěti vědět</div>
                        </div>
                    </div>
                </section>

                <!-- Dítě si přeje být v oddíle s -->
                <section class="prihlaska-sekce mb-4">
                    <h2 class="h3 mb-3">Dítě si přeje být v oddíle s</h2>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="oddil-jmeno1" class="form-label">Jméno a příjmení kamaráda/kamarádky</label>
                            <input type="text" class="form-control" id="oddil-jmeno1" name="oddil-jmeno1" placeholder="Vyplňte">
                            <div class="form-text">Jméno podobně starého dítěte ve formátu: Jméno Příjmení</div>
                        </div>
                        <div class="col-md-6">
                            <label for="oddil-jmeno2" class="form-label">Jméno a příjmení kamaráda/kamarádky</label>
                            <input type="text" class="form-control" id="oddil-jmeno2" name="oddil-jmeno2" placeholder="Vyplňte">
                            <div class="form-text">Jméno podobně starého dítěte ve formátu: Jméno Příjmení</div>
                        </div>
                    </div>
                </section>

                <!-- Doprava dítěte -->
                <section class="prihlaska-sekce mb-4">
                    <h2 class="h3 mb-3">Způsob dopravy</h2>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="doprava-tam" class="form-label form-label--required">Doprava dítěte na tábor</label>
                            <select class="form-select" id="doprava-tam" name="doprava-tam" required>
                                <option value="" selected>Vyberte</option>
                                <option value="bus_praha">Autobus Černý Most</option>
                                <option value="bus_cernosice">Autobus Černošice</option>
                                <option value="vlastni">Vlastní</option>
                            </select>
                            <div class="form-text">Kliknutím na políčko vyberte možnost</div>
                        </div>
                        <div class="col-md-6">
                            <label for="doprava-zpet" class="form-label form-label--required">Doprava dítěte na tábor</label>
                            <select class="form-select" id="doprava-zpet" name="doprava-zpet" required>
                                <option value="" selected>Vyberte</option>
                                <option value="bus_praha">Autobus Černý Most</option>
                                <option value="bus_cernosice">Autobus Černošice</option>
                                <option value="vlastni">Vlastní</option>
                            </select>
                            <div class="form-text">Kliknutím na políčko vyberte možnost</div>
                        </div>
                    </div>
                </section>

                <!-- Možnost fakturace ceny -->
                <section class="prihlaska-sekce mb-4">
                    <h2 class="h3 mb-3">Vystavení faktury</h2>
                    <div class="form-check" mb-3>
                        <input class="form-check-input" type="checkbox" value="0" id="fakturace-check" name="fakturace-check">
                        <label class="form-check-label" for="fakturace-check">
                            Přeji si vystavit fakturu
                        </label>
                    </div>
                    <div id="fakturace-detail" class="fakturace-detail d-none">
                        <div class="row g-3">
                            <div class="col-md-4 col-lg-3">
                                <label for="fakturace-ico" class="form-label">IČO</label>
                                <input type="text" class="form-control" id="fakturace-ico" name="fakturace-ico" placeholder="Vyplňte">
                                <div class="form-text">Formát: 12345678</div>
                            </div>
                            <div class="col-md-12">
                                <label for="fakturace-doplneni" class="form-label">Další údaje nutné pro fakturaci</label>
                                <input type="text" class="form-control" id="fakturace-doplneni" name="fakturace-doplneni" placeholder="Vyplňte">
                                <div class="form-text">Např. DIČ, název společnosti, adresa sídla apod.</div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Udělení souhlasů -->
                <section class="prihlaska-sekce mb-4">
                    <h2 class="h3 mb-3">Udělení souhlasů</h2>
                    <div class="form-check mb-2">
                        <input class="form-check-input " type="checkbox" value="1" id="souhlas-gdpr" name="souhlas-gdpr" required>
                        <label class="form-check-label" for="souhlas-gdpr">
                            Souhlasím se zpracováním osobních údajů dle <a href="/gdpr" target="_blank" rel="noopener">zásad ochrany osobních údajů</a>.
                        </label>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" value="1" id="souhlas-podminky" name="souhlas-podminky" required>
                        <label class="form-check-label" for="souhlas-podminky">
                            Souhlasím s <a href="/podminky-ucasti" target="_blank" rel="noopener">podmínkami účasti na táboře</a>.
                        </label>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" value="1" id="souhlas-fotky" name="souhlas-fotky" required>
                        <label class="form-check-label" for="souhlas-fotky">
                            Souhlasím s <a href="/souhlas-foto" target="_blank" rel="noopener"> pořizováním a zveřejňováním fotografií a videí mého dítěte během tábora</a> pro účely propagace tábora.
                        </label>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" value="1" id="souhlas-rad" name="souhlas-rad" required>
                        <label class="form-check-label" for="souhlas-rad">
                            Prohlašuji, že dítě i zákonný zástupce jsou ke dni odjezdu na tábor poučeni o <a href="/taborovy-rad" target="_blank" rel="noopener"> Táborovém řádu</a> a souhlasí s ním.
                        </label>
                    </div>
                    <div class="form-check mb-2">
                        <!-- reCAPTCHA placeholder -->
                        <div class="g-recaptcha" data-sitekey="DOPLNIT KEY"></div>
                    </div>

                    <p class="form-text"><span class="form-label--required"></span>povinné údaje</p>
                    <button type="submit" id="odeslat-prihlasku" class="btn btn-primary w-100">Odeslat přihlášku</button>
                    <p class="form-text">Odeslání přihlášky je závazné.</p>
                </section>
            </form>

            <div class = "modal fade" id="prihlaskaModal" tabindex="-1" aria-labelledby="prihlaskaModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content potvrzeni-modal">
                        <div class="modal-header">
                            <h2 class="modal-title h3 mb-0">Přejete si odeslat přihlášku?</h2>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Zavřít"></button>
                        </div>
                        <div class="modal-body">
                            <p class="mb-4">Potvrzení o odeslání přihlášky Vám zašleme na e-mail. Odeslání přihlášky je závazné.</p>
                            <div class="d-flex gap-3 justify-content-end">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Ne, neodesílat</button>
                                <button type="button" class="btn btn-secondary" id="modal-ano">Ano, odeslat</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        
