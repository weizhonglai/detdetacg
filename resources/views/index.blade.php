@extends('layouts.master')
@extends('components.menu-left')
@extends('components.main-footer')
 
@section('css_include')
@stop

@section('javascript_include')
@stop

@section('content')
        <!-- Right Column Start-->
     <p>
         The text content type is used for message content that is primarily in human-readable text character format. The more complex text content types are defined and identified so that an appropriate tool can be used to display that body part.
text/enriched [RFC1896]
The text/enriched content type is intended to be simple enough to make multifont, formatted e-mail widely readable. It uses a very limited set of formatting commands that all begin with <commandname> and end with </commandname>, affecting the formatting of the text between those two tokens.
text/html[RFC1866]
The text/html content type is an Internet Media Type as well as a MIME content type. Using HTML in MIME messages allows the full richness of Web pages to be available in e-mail.
text/plain[RFC1521]
The text/plain content type is the generic subtype for plain text. It is the default specified by RFC 822.
text/rfc822-headers[RFC1892]
The text/RFC822-headers content type provides a mechanism for an MTA to label and return only the RFC 822 headers of a failed message. Only the headers are returned, not the complete message. The returned headers are useful for identifying the failed message and for diagnosing delivery problems. All headers are to be returned, up to the blank line following the headers.
text/richtext[RFC1521]
The text/richtext content type has been made obsolete by text/enriched.  
text/sgml[RFC1874]
The text/sgml content type is intended to be used when the contents of the SGML entity is intended to be read by a human and is in a readily comprehensible form — that is, the content can be easily discerned by Someone without SGML display software. Each record in the SGML entity, delimited by record start (RS) and record end (RE) codes, must correspond to a line in the text/SGML body part
     </p>
@stop