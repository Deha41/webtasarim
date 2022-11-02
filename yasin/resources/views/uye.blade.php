@extends('tema')
@section('body')
    <center>
    @if($errors->any())
        @foreach($errors->all() as $hatalar)
        <div class="alert alert-danger">{{$hatalar}}</div>
        @endforeach
     @endif
     @if(session("success"))
     <div class="alert alert-warning">kayıt işlemi tamam</div>
     @endif  
     <div class="container">
     <div class="container " align="center" id="formmm" style="margin-top: 8%;">
                <div class="form container bg d-flex justify-content-center  w-50 rounded mx-auto"  id="formm">
                        <form class="" align="center" action="{{route('ekle')}}"  method="post">
                            @csrf
                                <div class="mb-4">
                                    <label class="form-label">Mail</label>
                                        <input type="email" class="form-control" name="mail">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Ad</label>
                                        <input type="text" class="form-control" name="kullaniciadi" >
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Soy Ad</label>
                                        <input type="text" class="form-control" name="kullanicisoyad" >
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Telefon</label>
                                        <input type="number" class="form-control" name="telefon" >
                                </div>
                                
                                <div class="mb-4">
                                    <label class="form-label">Meslek</label>
                                        <input type="text" class="form-control" name="meslek" >
                                </div>
                                <div class="input-group mb-3">
                                    <label class="input-group-text" for="inputGroupSelect01">Klasman</label>
                                    <select class="form-select" id="inputGroupSelect01" name="cars">
                                        <option selected value="aday">ADAY</option>
                                        <option value="il">İL</option>
                                        <option value="bölgesel">BÖLGESEL</option>
                                        <option value="klasman">KLASMAN</option>
                                    </select>
                                </div>
                                                                    
                                <div class="mb-3">
                                    <label  class="form-label">Şifre</label>
                                        <input type="text" class="form-control" name="sifre">
                                </div>
                                        
                                    <button type="submit" class="btn btn-primary">KAYIT OL</button>
                        </form>
                </div>
</div>
            
    </center>
@endsection('body')                
