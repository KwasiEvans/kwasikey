<form action="{{route('login')}}" class="sign-in-form" method="post">@csrf
    <h2 class="title">Sign in</h2>
    <div class="input-field">
        <i class="fas fa-envelope"></i>
      <input type="text" name="email" placeholder="Email" />
    </div>
    <div class="input-field">
      <i class="fas fa-lock"></i>
      <input type="password" name="password" placeholder="Password" />
    </div>
    <input type="submit" value="Login" class="btn solid" />
  </form>