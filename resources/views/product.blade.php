<product>
    <id>{{ $id }}</id>
    <name><![CDATA[{{ $name }}]]></name>
    <link><![CDATA[{{ $link }}]]></link>
    <image><![CDATA[{{ $image }}]]></image>
    @foreach($additional_images as $ai)
    <additionalimage><![CDATA[{{ $ai }}]]></additionalimage>
    @endforeach
    <category><![CDATA[{{ $category }}]]></category>
    <price>{{ number_format($price, 2) }}</price>
    <manufacturer><![CDATA[{{ $manufacturer }}]]></manufacturer>
    <mpn><![CDATA[{{ $mpn }}]]></mpn>
    <ean><![CDATA[{{ $ean }}]]></ean>
    <instock>{{ $instock }}</instock>
    <availability>{{ $availability }}</availability>
    <size>{{ $size }}</size>
    <weight>{{ $weight }}</weight>
    <color><![CDATA[{{ $color }}]]></color>
    <description><![CDATA[{{ $description }}]]></description>
</product>