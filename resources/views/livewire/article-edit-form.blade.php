    <div>
        <div class=>
            <form wire:submit='updateArticle'>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" placeholder="title" wire:model="title" required>
                </div>
                <div class="col-md-4 mb-3">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="price" placeholder="$" wire:model="price" required>
                </div>
                <div class="col-md-4 mb-3">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" placeholder="description" wire:model="description" required>
                </div>
            <button class="btn btn-primary" type="submit">Modifica annuncio</button>
            </form>
            @if (session('success'))
            <div class="alert"> {{session('success')}}</div>
            @endif
            </div>
            
    </div>
