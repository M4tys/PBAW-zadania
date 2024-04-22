{extends file="main.tpl"}

{block name=content}
    <header class="major">
        <h4>Logowanie do systemu</h4>
    </header>

    <div class="row gtr-200">
        <div class="col-7 col-12-medium">
            <form action="{$conf->action_url}login" method="post">
                <div class="row gtr-uniform">
                    <div class="col-6 col-12-xsmall">
                        <label for="id_login">Login: </label>
                        <input type="text" id="id_login" name="login"><br>
                        <label for="id_pass">Password: </label>
                        <input type="password" id="id_pass" name="pass"><br>
                    </div>
                </div>
                <ul class="actions">
                    <li><input type="submit" value="Zaloguj" class="primary" /></li>
                </ul>
            </form>
        </div>
        <div class="col-5 col-12-medium">
            {include file="messages.tpl"}
        </div>
    </div>

{/block}
