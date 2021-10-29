<main class="content">
    <div class="content-title mb-4">
        <form class="dados-pessoais" action="#" method="post">
            <div>
                <label for="name">Nome</label>
                <input type="text" name="name" id="name">
            </div>
            <div>
                <label for="cpf">CPF</label>
                <input type="text" name="cpf" id="cpf">
            </div>
            <div>
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email">
            </div>
        </form>
    </div>

    <form class="dados-ingresso">
        <div class="dados-ingressos-item">
            <div class="dados-ingressos-divisao">
                <label for="tipo-ingresso">Tipo de Ingresso: </label>
            </div>
            <input type="radio" name="tipo-ingresso" id="tipo-ingresso">
            <label for="vip">VIP</label>
            <input type="radio" name="tipo-ingresso" id="tipo-ingresso">
            <label for="normal">Normal</label>
        </div>
        <div>
            <label for="qtd">Quantidade de Ingressos</label>
            <input type="number" name="qtd" id="qtd">
        </div>
    </form>

    <form class="dados-preco">
        <div>
            <label for="preco">Preço R$</label>
        </div>
        <div>
            <label for="preco-total">Preço Total R$</label>
        </div>
        <div>
            <div class="dados-preco-item">
                <label for="tipo-pag">Tipo de Pagamento: </label>
                <label for="dinheiro">Dinheiro</label>
                <input type="radio" name="preco" id="preco">
                <label for="cartao">Cartão</label>
                <input type="radio" name="preco" id="preco">
            </div>
        </div>
        <div>
            <label for="troco">Troco R$</label>
        </div>
    </form>

    <div class="form-button">
        <button class="btn btn-lg btn-primary">Imprimir</button>
    </div>
</main>