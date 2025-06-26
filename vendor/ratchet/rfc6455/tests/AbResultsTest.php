/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

namespace Ratchet\RFC6455\Test;
use PHPUnit\Framework\TestCase;

class AbResultsTest extends TestCase {
    private function verifyAutobahnResults($fileName) {
        if (!file_exists($fileName)) {
            return $this->markTestSkipped('Autobahn TestSuite results not found');
        }

        $resultsJson = file_get_contents($fileName);
        $results = json_decode($resultsJson);
        $agentName = array_keys(get_object_vars($results))[0];

        foreach ($results->$agentName as $name => $result) {
            if ($result->behavior === "INFORMATIONAL") {
                continue;
            }

            $this->assertTrue(in_array($result->behavior, ["OK", "NON-STRICT"]), "Autobahn test case " . $name . " in " . $fileName);
        }
    }

    public function testAutobahnClientResults() {
        $this->verifyAutobahnResults(__DIR__ . '/ab/reports/clients/index.json');
    }

    public function testAutobahnServerResults() {
        $this->verifyAutobahnResults(__DIR__ . '/ab/reports/servers/index.json');
    }
}
