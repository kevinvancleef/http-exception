<?php
namespace Coolblue\Http;

use Coolblue\Entities\HttpStatus;

/**
 * Class Status contains information about http status code.
 * @package Coolblue\Http
 */
class Status
{
    /**
     * Returns http status information for bad gateway.
     * @return HttpStatus
     */
    public function badGateway()
    {
        return new HttpStatus(502, "Bad gateway");
    }

    /**
     * Returns http status information for bad request.
     * @return HttpStatus
     */
    public function badRequest()
    {
        return new HttpStatus(400, "Bad request");
    }

    /**
     * Returns http status information for conflict.
     * @return HttpStatus
     */
    public function conflict()
    {
        return new HttpStatus(409, "Conflict");
    }

    /**
     * Returns http status information for expectation failed.
     * @return HttpStatus
     */
    public function expectationFailed()
    {
        return new HttpStatus(417, "Expectation failed");
    }

    /**
     * Returns http status information for forbidden.
     * @return HttpStatus
     */
    public function forbidden()
    {
        return new HttpStatus(403, "Forbidden");
    }

    /**
     * Returns http status information for gateway timeout.
     * @return HttpStatus
     */
    public function gatewayTimeout()
    {
        return new HttpStatus(504, "Gateway timeout");
    }

    /**
     * Returns http status information for gone.
     * @return HttpStatus
     */
    public function gone()
    {
        return new HttpStatus(410, "Gone");
    }

    /**
     * Returns http status information for http version not supported.
     * @return HttpStatus
     */
    public function httpVersionNotSupported()
    {
        return new HttpStatus(505, "Http version not supported");
    }

    /**
     * Returns http status information for internal server error.
     * @return HttpStatus
     */
    public function internalServerError()
    {
        return new HttpStatus(500, "Internal server error");
    }

    /**
     * Returns http status information for length required.
     * @return HttpStatus
     */
    public function lengthRequired()
    {
        return new HttpStatus(411, "Length required");
    }

    /**
     * Returns http status information for method not allowed.
     * @return HttpStatus
     */
    public function methodNotAllowed()
    {
        return new HttpStatus(405, "Method not allowed");
    }

    /**
     * Returns http status information for not acceptable.
     * @return HttpStatus
     */
    public function notAcceptable()
    {
        return new HttpStatus(406, "Not acceptable");
    }

    /**
     * Returns http status information for not found.
     * @return HttpStatus
     */
    public function notFound()
    {
        return new HttpStatus(404, "Not found");
    }

    /**
     * Returns http status information for not implemented.
     * @return HttpStatus
     */
    public function notImplemented()
    {
        return new HttpStatus(501, "Not implemented");
    }

    /**
     * Returns http status information for conflict.
     * @return HttpStatus
     */
    public function paymentRequired()
    {
        return new HttpStatus(402, "Payment required");
    }

    /**
     * Returns http status information for precondition failed.
     * @return HttpStatus
     */
    public function preconditionFailed()
    {
        return new HttpStatus(412, "Precondition failed");
    }

    /**
     * Returns http status information for proxy authentication required.
     * @return HttpStatus
     */
    public function proxyAuthenticationRequired()
    {
        return new HttpStatus(407, "Proxy authentication required");
    }

    /**
     * Returns http status information for request entity to large.
     * @return HttpStatus
     */
    public function requestEntityToLarge()
    {
        return new HttpStatus(413, "Request entity to large");
    }

    /**
     * Returns http status information for request range not satisfiable.
     * @return HttpStatus
     */
    public function requestRangeNotSatisfiable()
    {
        return new HttpStatus(416, "Request range not satisfiable");
    }

    /**
     * Returns http status information for request-uri to long.
     * @return HttpStatus
     */
    public function requestUriTooLong()
    {
        return new HttpStatus(414, "Request-URI to long");
    }

    /**
     * Returns http status information for service unavailable.
     * @return HttpStatus
     */
    public function serviceUnavailable()
    {
        return new HttpStatus(503, "Service unavailable");
    }

    /**
     * Returns http status information for timeout.
     * @return HttpStatus
     */
    public function timeout()
    {
        return new HttpStatus(408, "Request timeout");
    }

    /**
     * Returns http status information for unauthorized.
     * @return HttpStatus
     */
    public function unauthorized()
    {
        return new HttpStatus(401, "Unauthorized");
    }

    /**
     * Returns http status information for unsupported media type.
     * @return HttpStatus
     */
    public function unsupportedMediaType()
    {
        return new HttpStatus(415, "Unsupported media type");
    }
}
