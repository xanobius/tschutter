<div>
    <form action="" wire:submit.prevent="saveUser">
        <div class="row form-group">
            <div class="col-lg-6">
                <label for="playerName">Name</label>
                <input id="playerName" type="text" wire:model.lazy="name" class="form-control">
                @error('name')<span>{{ $message }}</span> @enderror
            </div>
            <div class="col-lg-6">
                <label for="playerEmail">Email</label>
                <input id="playerEmail" type="email" wire:model="email" class="form-control">
                @error('email')<span>{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <input type="submit" value="save" class="form-control btn btn-success">
            </div>
            <div class="col-6">
                <button class="btn btn-danger btn-block" wire:click.prevent="$emitUp('cancelMask')">Cancel</button>
            </div>
        </div>
    </form>
</div>
