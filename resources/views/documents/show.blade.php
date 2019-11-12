@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>Canadian Chocolate Chip Bacon Cookies</h1>
                <br>
                <p>Bitchin’ Kitchen host Nadia G simply replies, “‘Nuff said.”</p>
                <br>
                <p><i>Makes about 50 cookies</i></p>
                <br>
                <p><strong>Instructions:</strong></p>
                <ul>
                    <li>12 slices of bacon, minced</li>
                    <li>¼ cup maple syrup</li>
                    <li>1 cup unsalted butter, diced</li>
                    <li>¾ cup granulated sugar</li>
                    <li>½ cup raw sugar</li>
                    <li>1 large egg</li>
                    <li>1 tsp. vanilla extract</li>
                    <li>2 cups all-purpose flour</li>
                    <li>1 tsp. baking soda</li>
                    <li>1½ cups quality milk chocolate, in chip-sized chunks</li>
                    <li>Flaky sea salt</li>
                </ul>
                <ol>
                    <li>Position an oven rack in the center of the oven and preheat to 350ºF. Line a cookie sheet with parchment paper.</li>
                    <br>
                    <li>For the bacon: In a medium frying pan, sauté the bacon until the fat has rendered and the bacon is crisp. Drain the fat from the pan, add the maple syrup and stir to blend. Sauté until the maple syrup becomes thick, 1 to 2 minutes. Transfer immediately to a small bowl and let cool.</li>
                    <br>
                    <li>For the batter: With a standing or handheld mixer, blend the butter and sugars until light and fluffy, 3 to 5 minutes. Add the egg and beat until well blended, 1 minute. Add the vanilla and beat for 30 seconds more. Stir in the flour and baking soda with a wooden spoon. Add the bacon and chocolate and stir to combine. Scoop heaping teaspoons of dough onto the prepared baking sheet and sprinkle with sea salt. Bake until golden around the edges, 9 to 10 minutes.</li>
                    <br>
                    <li>Let the cookies cool for 1 minute, and then transfer them to a wire rack to cool completely.</li>
                </ol>
                <img src="/img/cookies.png" alt="Cookies" height="250">
                <br><br>
                <a class="btn btn-primary" href="/documents/{{ $document->id }}/update" role="button">Update</a>
            </div>
        </div>
    </div>
@endsection
