vcl 4.0;

backend foo {
        .host = "{{ parent().get_service_by_role('varnish')['$name'] }}";
        .port = "8080";
}

sub vcl_deliver {
        set resp.http.X-hello = "Hello, world";
}