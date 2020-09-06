<div>
    <form action="" wire:submit.prevent="save">
        {{ $name }} : {{ $email }}
        <div class="row form-group">
            <div class="col-lg-6">
                <label for="playerName">Name</label>
                <input id="playerName" type="text" wire:model="name" class="form-control">
            </div>
            <div class="col-lg-6">
                <label for="playerEmail">Email</label>
                <input id="playerEmail" type="email" wire:model="email" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <input type="submit" value="save" class="form-control">
            </div>
        </div>
    </form>
</div>
