<form action="{{route('register')}}" class="sign-up-form" method="post">@csrf
    <h2 class="title">Sign up</h2>
    <div class="input-field">
      <i class="fas fa-user"></i>
      <input type="text" name="name" placeholder="Username" />
    </div>
    <div class="input-field">
      <i class="fas fa-envelope"></i>
      <input type="email" name="email" placeholder="Email" />
    </div>
    <div class="input-field">
      <i class="fas fa-lock"></i>
      <input type="password" name="password" placeholder="Password" />
    </div>
    <div class="input-field">
      <i class="fas fa-lock"></i>
      <input type="password" name="password_confirmation" placeholder="Confirm password" />
    </div>
    <input type="submit" class="btn" value="Sign up" />
  </form>