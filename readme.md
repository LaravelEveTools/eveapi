# Laravel Eve Tools
## Based on [SeAT - Eve API package](https://github.com/eveseat/eveapi), but project agnostic.

This package provides an abstract class for each ESI endpoint. Extend the class, and implement the handle function.

The handle function should call `$this->retrieve()` to get the information from the ESI. 
make sure you set any request body or query string attributes required by using 
`$this->request_body[]` or `$this->query_string[]` as required.


