
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
  <center>
    <div class="btn btn-primary">
 <h1> ajouter une phase</h1>
</div>
<div class="container py-6">

<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <div class="card-header">{{ __('phase') }}</div>

              <div class="card-body">
                <form  action="phase"id="contactForm" method="POST" enctype="multipart/form-data">
                  @csrf

                  <div class="row mb-3">
                          <label for="nom" class="col-md-4 col-form-label text-md-end">{{ __('nom') }}</label>

                          <div class="col-md-6">
                              <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('name') }}" required autocomplete="name" autofocus value="{{$projet->id}}">

                              @error('name')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>


                      <div class="row mb-3">
                          <label for="description" class="col-md-4 col-form-label text-md-end">{{ __('duree') }}</label>

                          <div class="col-md-6">
                              <input id="duree" type="number" class="form-control @error('duree') is-invalid @enderror" name="duree" value="{{ old('name') }}" required autocomplete="name" autofocus>

                              @error('name')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="row mb-3">
                          <label for="propriete" class="col-md-4 col-form-label text-md-end">{{ __('propriete') }}</label>

                          <div class="col-md-6">
                              <input id="propriete" type="string" class="form-control @error('tel') is-invalid @enderror" name="propriete" value="{{ old('propriete') }}" required autocomplete="tel" autofocus>

                              @error('datedebut')
                                  <span class="invalid-feedback" tel="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      

                      <input type="hidden" value="{{ $projet->id }}" name="idpro"> 
                     
                      <div class="row mb-0">
                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  {{ __('enregistrer') }}

                              </button>
                                      
                          </div>
                         
                      </div>
                     
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>