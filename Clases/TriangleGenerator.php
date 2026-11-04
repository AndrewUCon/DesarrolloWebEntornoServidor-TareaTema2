<?php 

Class TriangleGenerator {
    public function generateTriangle(int $altura): string {
        if ($altura < 0) {
            return "";
        }
        $triangle = "";
        for ($i = 1; $i <= $altura; $i++) {
            $triangle .= "<p>" . str_repeat("&nbsp;", $altura-$i) . str_repeat("*", ($i * 2)-1) . "</p>";
        }
        return $triangle;

    }
}