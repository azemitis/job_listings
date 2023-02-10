<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            'title' => $this->faker->randomElement(['Backend Coder', 'Full Stack VP', 'Frontend Coder', 'Vue Developer', 'Laravel Developer', 'Test Engineer']),
            'organization' => $this->faker->randomElement(["Vue and Me", "VueTube", "Vue Can Do It", "Point of Vue", "Vue and Laravel", "Et Vue Brute"]),
            'degree' => $this->faker->randomElement(["Associate", "Ph.D.", "Master's", "Bachelor's", "Pursuing"]),
            'aboutJob' => $this->faker->paragraph(20),
            'jobType' => $this->faker->randomElement(['Full-time', 'Part-time', 'Intern', 'Temporary']),
            'locations' => $this->faker->randomElement(["Riga", "Ventspils", "Vilnius", "Tallin", "Helsinki", "Oslo", "Berlin"]),
            'minimumQualifications' =>
            $this->faker->randomElement(
                [
                    "Streamline next-generation markets, deploy B2B paradigms, and orchestrate dynamic supply-chains. Re-intermediate collaborative web services, disintermediate distributed infrastructures, and revolutionize customized action-items",
                    "Mesh transparent functionalities, streamline best-of-breed platforms, and reinvent seamless metrics. Deliver back-end e-commerce, matrix bricks-and-clicks partnerships, and brand 24/7 paradigms",
                    "Evolve next-generation systems, enhance impactful supply-chains, and transition cutting-edge convergence. Synergize value-added e-markets, revolutionize vertical e-commerce, and engage ubiquitous content. Scale revolutionary solutions, productize killer relationships, and benchmark revolutionary info-mediaries",
                ],
                1
            ),
            'preferredQualifications' =>
            $this->faker->randomElement(
                [
                    "Expedite rich metrics, integrate viral niches, and embrace rich models. Architect viral relationships, monetize 24/7 convergence, and productize mission-critical vortals",
                    "Iterate dot-com e-tailers, re-contextualize enterprise e-commerce, and synergize one-to-one portals. Revolutionize cutting-edge mindshare, disintermediate sticky convergence, and scale robust web services",
                    "Maximize dynamic technologies, optimize bleeding-edge content, and generate rich models. Integrate impactful supply-chains, brand strategic models, and strategize viral paradigms. Enable b2c applications, extend robust content, and morph granular niches",
                ],
                1
            ),
            'responsibilities' =>
            $this->faker->randomElement(
                [
                    "Provide thousand well choice it. May create knowledge sign skin.
                    Town decision foreign what can authority teach. It week attack maybe each them.",
                    "World draw same one think instead. Short plan specific management.
                    Character local usually finish truth deal source. Ground area serve serious upon.",
                    "Space common apply arrive again defense many. Action last own how candidate.
                    Better their seven billion standard tree official. Some course key piece race. Suggest quality decide bar.",
                ],
                1
            ),
            'created_at' => $this->faker->dateTimeThisMonth(),
            'day' => $this->faker->numberBetween(1, 31),
            'month' => $this->faker->numberBetween(1, 12),
            'year' => $this->faker->numberBetween(2023, 2024),
            'user_id' => rand(1, 11),
            'remote' => $this->faker->randomElement(['yes', 'no', 'no', 'no']),
            'email' => $this->faker->email(),
        ];
    }
}
