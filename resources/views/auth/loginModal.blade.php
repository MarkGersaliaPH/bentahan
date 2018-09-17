

<!-- Modal -->
<div id="loginModal" class="modal fade" role="dialog">
        <div class="modal-dialog" style="width: 300px;">
      
          <!-- Modal content-->
          <div class="modal-content">
              {{-- <button type="button" class="close" data-dismiss="modal">&times;</button> --}}
             <div class="modal-body">
                 

                <form  method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                 <strong>Login Via</strong>
                 <br><br>
                 <div class="form-group">
                     <button class="btn btn-primary"><i class="fab fa-facebook"></i> Facebook</button>
                     <button class="btn btn-info"><i class="fab fa-twitter"></i> Twitter</button>
                 </div>
                 <div class="form-group"> 
                    or
                 </div>
                 
                 <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}"> 
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
         
                         @if ($errors->has('email'))
                             <span class="help-block">
                                 <strong>{{ $errors->first('email') }}</strong>
                             </span>
                         @endif 
                 </div>
          

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input id="password" type="password" class="form-control" name="password" required>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif 
                </div>
                 <div class="form-group">
                     
                    <a class="btn btn-link pull-right" href="{{ route('password.request') }}">
                        Forgot Your Password?
                    </a>
                    <br>
                 </div>
                 <div class="form-group">
                     <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                 </div>
                </form>
            </div>
            <div class="modal-footer" style="background:#f1f1f1;text-align:center">
                New here? <a href="">Join us</a>
            </div>
          </div>
      
        </div>
      </div>

