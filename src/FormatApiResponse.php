<?php

namespace OpenEyes\FormatApiResponse;

class FormatApiResponse
{
    public static function message($code, $message, $count = null, $payload = null)
    {
        return response()->json([
            'code' => $code,
            'message' => $message,
            'count' => $count,
            'data' => $payload,
        ], $code);
    }
}
