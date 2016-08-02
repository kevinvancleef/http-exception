<?php
namespace Coolblue\Http\Tests\Entities;

use Coolblue\Entities\HttpStatus;

class HttpStatusTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests if construction of an http status code object works correctly.
     */
    public function testInitializingHttpStatus()
    {
        $code = 404;
        $description = "Not Found";

        $status = new HttpStatus($code, $description);

        $this->assertSame($code, $status->getCode());
        $this->assertSame($description, $status->getDescription());
    }
}
