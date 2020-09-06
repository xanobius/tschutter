<div>
    <form wire:submit.prevent="save" class="form-group">
        <div>
            <label for="teamOne">Team One</label>
            <select type="text" id="teamOne" class="form-control" wire:model="teamOne" multiple>
                @foreach($availableOne as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="teamTwo">Team Two</label>
            {{ $availableTwo->map(fn ($u) => $u->name)->implode(', ') }}
            <select type="text" id="teamTwo" class="form-control" wire:model="teamTwo" multiple>
                @foreach($availableTwo as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="row">
            <div class="col-5">
                <input type="number" wire:model="pointsOne" class="form-control" />
            </div>
            <div class="col-2">:</div>
            <div class="col-5">
                <input type="number" wire:model="pointsTwo" class="form-control" />
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <button class="btn btn-success btn-block">Save</button>
            </div>
            <div class="col-6">
                <button class="btn btn-danger btn-block" wire:click="cancel">Cancel</button>
            </div>
        </div>
    </form>
</div>
