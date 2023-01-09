<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<CEnter>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="">
                        @csrf

                        <div class="row mb-3">
                            <label for="nom" class="col-md-4 col-form-label text-md-end">{{ __('nom') }}</label>

                            <div class="col-md-6">
                                <input id="prenom" type="text" class="form-control @error('niveau') is-invalid @enderror" name="nom" value=" {{$projet->nom }} "disabled>

                                @error('niveau')
                                    <span class="invalid-feedback" niveau="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="description" class="col-md-4 col-form-label text-md-end">{{ __('description') }}</label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control @error('niveau') is-invalid @enderror" name="description" required autocomplete="niveau" autofocus value=" {{$projet->description }}"disabled>

                                @error('niveau')
                                    <span class="invalid-feedback" niveau="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        
                        <div class="row mb-3">
                            <label for="prenom" class="col-md-4 col-form-label text-md-end">{{ __('date debut') }}</label>

                            <div class="col-md-6">
                                <input id="niveau" type="text" class="form-control @error('niveau') is-invalid @enderror" name="niveau" required autocomplete="niveau" autofocus value=" {{$projet->datedebut}}" disabled>

                                @error('niveau')
                                    <span class="invalid-feedback" niveau="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="niveau" class="col-md-4 col-form-label text-md-end">{{ __('datefin') }}</label>

                            <div class="col-md-6">
                                <input id="age" type="" class="form-control @error('age') is-invalid @enderror" name="age"  required autocomplete="age" autofocus value=" {{$projet->datefin}}" disabled>

                                @error('prenom')
                                    <span class="invalid-feedback" prenom="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        
                        


                         <input type="hidden" value="{{ $projet->id }}" name="iduser"> 
                        <td>
                        <a href="{{'phase/'.$projet->id}}" class="button btn btn-info">ajouter une phase</a>
                       

                        

</a>
                        
                       
                            
                                <div class="col-md-7 offset-md-7">
                               <a href="home"  type="" class="btn btn-primary">annuler</a>
                                    
                            </div>
                        </div>
                       
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</CEnter>

