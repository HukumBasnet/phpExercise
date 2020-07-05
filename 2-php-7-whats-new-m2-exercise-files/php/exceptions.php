<?php

class VeryBadException extends Exception {}
class BadException extends Exception {}
class NotSoBadException extends Exception {}

try {
}
catch (VeryBadException | BadException $ex) {
}
catch (NotSoBadException $ex) {
}