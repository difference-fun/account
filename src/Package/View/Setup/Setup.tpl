{{R3M}}
{{$register = Package.Difference.Fun.Account:Init:register()}}
{{if(!is.empty($register))}}
{{Package.Difference.Fun.Account:Import:role.system()}}
{{$options = options()}}
/**
 // setup roles*
 // setup permissions*
 // setup jwt* (no patch, only force)
 // setup admin
 // setup user login (api.example.com)

 */
{{/if}}