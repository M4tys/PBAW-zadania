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