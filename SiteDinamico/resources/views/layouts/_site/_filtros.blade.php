<div class="row">
    <form>
        <div class="input-field col s6 m4">
            <select id="filtro">
                <option value="aluga">Aluga</option>
                <option value="vende">Vende</option>
            </select>
            <label for="filtro">
                Status
            </label>
        </div>
        <div class="input-field col s6 m4">
            <select id="filtro">
                <option value="1">Alvenaria</option>
                <option value="2">Apartamento</option>
                <option value="3">Duplex</option>
            </select>
            <label for="filtro">
                Tipo de imóvel
            </label>
        </div>
        <div class="input-field col s6 m4">
            <select id="filtro">
                <option value="1">Curitiba</option>
                <option value="2">Londrina</option>
            </select>
            <label for="filtro">
                Cidade
            </label>
        </div>
        <div class="input-field col s6 m3">
            <select id="filtro">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">Mais</option>
            </select>
            <label for="filtro">
                Dormitórios
            </label>
        </div>
        <div class="input-field col s12 m4">
            <select id="filtro">
                <option value="1">Até R$ 500,00</option>
                <option value="2">R$ 500,00 a R$ 1.000,00</option>
                <option value="3">R$ 1.000,00 a R$ 5.000,00</option>
                <option value="4">R$ 5.000,00 a R$ 10.000,00</option>
                <option value="4">R$ 10.000,00 a R$ 50.000,00</option> 
            </select>
            <label for="filtro">
                Valor
            </label>
        </div>
        <div class="input-field col s12 m3" name="bairro">
            <input type="text" class="validate" name="bairro"/>
            <label for="filtro">
                Bairro
            </label>
        </div>
        <div class="input-field col s12 m2" name="bairro">
            <button class="btn deep-orange darken-1 right">Filtrar</button>
        </div>
    </form>
</div>
