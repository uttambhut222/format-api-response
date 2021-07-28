<?php

namespace TheOpenEyes\FormatApiResponse;

class FormatApiResponse
{
    public static function response($code, $message, $count = null, $payload = null)
    {
        return response()->json([
            'code' => $code,
            'message' => $message,
            'count' => $count,
            'data' => $payload,
        ], $code);
    }
}
