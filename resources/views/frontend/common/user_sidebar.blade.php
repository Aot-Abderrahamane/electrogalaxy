@php
$id = Auth::user()->id;
$user = App\Models\User::find($id);
@endphp
<div class="col-md-2"><br>
    <img alt="" class="card-img-top" style="border-radius: 50%"
        src="{{ (!empty($user->profile_photo_path))? url('upload/user_images/'.$user->profile_photo_path):url('upload/no_image.jpg') }}"
        height="100%" width="100%">
    <ul class="list-group list-group-flush">
        <a href="{{route('dashboard')}}" class="btn btn-primary btn-sm btn-block">Acceuil</a>
        <a href="{{route('user.profile')}}" class="btn btn-primary btn-sm btn-block">mettre à jour
            Profile</a>
        <a href="{{route('change.password')}}" class="btn btn-primary btn-sm btn-block">Changer le mot de passe</a>

        <a href="{{ route('my.orders') }}" class="btn btn-primary btn-sm btn-block">Mes commandes</a>


        <a href="{{ route('return.order.list') }}" class="btn btn-primary btn-sm btn-block">Commandes de retour</a>

        <a href="{{route('user.logout')}}" class="btn btn-danger btn-sm btn-block">Déconnecter</a>
    </ul>

</div>