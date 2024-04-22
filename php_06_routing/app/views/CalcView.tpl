{extends file='main.tpl'}

{block name=logout}
    <nav>
        <a href="{$conf->action_url}logout" class="button scrolly">Wyloguj</a>
    </nav>
{/block}

{block name=content}
    <header class="major">
        <h4>Kalkulator kredytowy</h4>
    </header>

    <div class="row gtr-200">
        <div class="col-7 col-12-medium">
            <form action="{$conf->action_url}calcCompute" method="post">
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
            {include file="messages.tpl"}

            {if isset($monthlyRate->result)}
                <div class="box">
                    <h4>Wynik</h4>
                    <p style="color: yellow;">Miesięczna rata: {$monthlyRate->result|string_format:"%.2f"} zł</p>
                </div>
            {/if}
        </div>
    </div>

{/block}
