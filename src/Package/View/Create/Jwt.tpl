{{R3M}}
{{$response = Package.Difference.Fun.Account:Main:account.create.jwt(flags(), options())}}
{{$response|object:'json'}}