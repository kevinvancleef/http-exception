<?php
namespace Coolblue\Http\Tests;

use Coolblue\Http\Status;

class StatusTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests if all the methods are returning the correct http status objects.
     * @param string $method
     * @param int $expectedCode
     * @param string $expectedDescription
     * @dataProvider httpStatusDataProvider
     */
    public function testIfCorrectHttpStatusObjectIsReturned($method, $expectedCode, $expectedDescription)
    {
        $status = new Status();

        $this->assertInstanceOf("Coolblue\\Entities\\HttpStatus", $status->$method);
        $this->assertSame($expectedCode, $status->$method->getCode());
        $this->assertSame($expectedDescription, $status->$method->getDescription());
    }

    /**
     * Http status code data provider.
     * @return array
     */
    public function httpStatusDataProvider()
    {
        return [
            ["badGateway", 502, "Bad gateway"],
            ["badRequest", 400, "Bad request"],
            ["conflict", 409, "Conflict"],
            ["expectationFailed", 417, "Expectation failed"],
            ["forbidden", 403, "Forbidden"],
            ["gatewayTimeout", 504, "Gateway timeout"],
            ["gone", 410, "Gone"],
            ["httpVersionNotSupported", 505, "Http version not supported"],
            ["internalServerError", 500, "Internal server error"],
            ["lengthRequired", 411, "Length required"],
            ["methodNotAllowed", 405, "Method not allowed"],
            ["notAcceptable", 406, "Not acceptable"],
            ["notFound", 404, "Not found"]
            // TODO: Add the remaining status codes.
        ];
    }
}
