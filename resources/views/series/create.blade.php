<x-layout title="Adicionar Série">
    <form action="/series/salvar" method="POST">
        <div>
            <label for="nome" class="form-label">Nome: </label>
            <input type="text" id="nome" name="nome" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
</x-layout>