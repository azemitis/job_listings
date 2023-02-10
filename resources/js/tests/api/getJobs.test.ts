
import axios from "axios";
jest.mock("axios");

import getJobs from "../../api/getJobs";

const axiosGetMock = axios.get as jest.Mock;

describe("getJobs", () => {
  beforeEach(() => {
    axiosGetMock.mockResolvedValue({
      data: [
        {
          id: 1,
          title: "Java Engineer",
        },
      ],
    });
  });

  it("fetches jobs that candidates can apply to", async () => {
    await getJobs();
    expect(axios.get).toHaveBeenCalledWith("http://127.0.0.1:8000/api/jobs");
  });

});

