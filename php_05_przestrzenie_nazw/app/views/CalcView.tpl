{extends file='main.tpl'}

{block name="banner"}
    <header class="major">
        <h1>{$page_header|default:"Tytuł domyślny"}</h1>
    </header>
    <div class="content">
        <p>{$page_description|default:"Opis domyślny"}</p>
        <ul class="actions">
            <li><a href="#main" class="button next scrolly">Oblicz raty</a></li>
        </ul>
    </div>
{/block}


{block name=content}
    <header class="major">
        <h4>Kalkulator kredytowy</h4>
    </header>

    <div class="row gtr-200">
        <div class="col-7 col-12-medium">
            <form action="{$conf->action_root}calcCompute" method="post">
                <div class="row gtr-uniform">
                    <div class="col-6 col-12-xsmall">
                        <label for="id_amount">Kwota kredytu [zł]: </label>
                        <input type="text" id="id_amount" name="amount" value="{$form->amount}"><br>
                        <label for="id_years">Okres kredytowania [lata]: </label>
                        <input type="text" id="id_years" name="years" value="{$form->years}"><br>
                        <label for="id_interest">Oprocentowanie [%]: </label>
                        <input type="text" id="id_interest" name="interest" value="{$form->interestRate}"><br>
                    </div>
                </div>
                <ul class="actions">
                    <li><input type="submit" value="Oblicz miesięczną ratę" class="primary" /></li>
                </ul>
            </form>
        </div>
        <div class="col-5 col-12-medium">
            {if $msgs->isError()}
                    <div class="box">
                        <h4>Wystąpiły błędy </h4>
                        <ol style="color: red;">
                        {foreach $msgs->getErrors() as $err}
                            {strip}
                                <li>{$err}</li>
                            {/strip}
                        {{/foreach}}
                        </ol>
                    </div>
            {/if}


            {if isset($monthlyRate->result)}
                <div class="box">
                    <h4>Wynik</h4>
                    <p style="color: yellow;">Miesięczna rata: {$monthlyRate->result|string_format:"%.2f"} zł</p>
                </div>
            {/if}
        </div>
    </div>

{/block}

{block name="footer"}
    <li>&copy; Untitled</li>
    <li>Autor: Bartosz Matysek</li>
    <li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
{/block}
